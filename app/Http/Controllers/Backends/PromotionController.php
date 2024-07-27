<?php

namespace App\Http\Controllers\Backends;

use App\helpers\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use App\Models\Promotion;
use App\Models\Translation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::latest('id')->paginate(10);
        return view('backends.promotion.index', compact('promotions'));
    }

    public function create()
    {
        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.promotion._create', compact('language', 'default_lang'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banners' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['success' => 0, 'msg' => __('Invalid form input')]);
        }

        try {
            // dd($request->all());
            DB::beginTransaction();
            $promotion = new Promotion();
            $promotion->created_by = auth()->user()->id;

            if ($request->hasFile('image')) {
                $promotion->images = ImageManager::upload('uploads/promotion/', $request->image);
            }

            $promotion->save();
            DB::commit();

            $output = [
                'success' => 1,
                'msg' => __('Create successfully'),
            ];
        } catch (Exception $e) {
            dd($e);
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong'),
            ];
        }

        return redirect()->back()->with($output);
    }

    public function edit($id)
    {
        // dd($id);
        $promotion = Promotion::withoutGlobalScopes()->with('translations')->findOrFail($id);

        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.promotion._edit', compact('promotion', 'language', 'default_lang'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'banners' => 'require',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['success' => 0, 'msg' => __('Invalid form input')]);
        }

        try {
            DB::beginTransaction();

            $promotion = Promotion::findOrFail($id);
            if ($request->hasFile('image')) {
                $promotion->images = ImageManager::update('uploads/promotion/', $promotion->image, $request->image);
            }
            $promotion->save();
            DB::commit();

            $output = [
                'success' => 1,
                'msg' => __('Create successfully'),
            ];
        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong'),
            ];
        }

        return redirect()->back()->with($output);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $promotion = Promotion::findOrFail($id);
            $translation = Translation::where('translationable_type', 'App\Models\Promotion')
                ->where('translationable_id', $promotion->id);

            $translation->delete();
            $promotion->delete();

            $promotions = Promotion::latest('id')->paginate(10);
            $view = view('backends.promotion._table', compact('promotions'))->render();

            DB::commit();
            $output = [
                'status' => 1,
                'view' => $view,
                'msg' => __('Deleted successfully')
            ];
        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'status' => 0,
                'msg' => __('Something went wrong')
            ];
        }

        return response()->json($output);
    }

    public function updateStatus(Request $request)
    {
        try {
            DB::beginTransaction();

            $promotion = Promotion::findOrFail($request->id);
            $promotion->status = $promotion->status == 1 ? 0 : 1;
            $promotion->save();

            $output = ['status' => 1, 'msg' => __('Status updated')];

            DB::commit();
        } catch (Exception $e) {

            $output = ['status' => 0, 'msg' => __('Something went wrong')];
            DB::rollBack();
        }

        return response()->json($output);
    }
}
