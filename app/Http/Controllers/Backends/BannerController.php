<?php

namespace App\Http\Controllers\Backends;

use App\helpers\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BusinessSetting;
use App\Models\Translation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest('id')->paginate(10);
        return view('backends.banner.index', compact('banners'));
    }

    public function create()
    {
        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.banner._create', compact('language', 'default_lang'));
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
            $banner = new Banner();
            $banner->created_by = auth()->user()->id;

            if ($request->hasFile('banner')) {
                $banner->banners = ImageManager::upload('uploads/banner/', $request->banner);
            }

            $banner->save();
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
        $banner = Banner::withoutGlobalScopes()->with('translations')->findOrFail($id);

        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.banner._edit', compact('banner', 'language', 'default_lang'));
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

            $banner = Banner::findOrFail($id);
            if ($request->hasFile('banner')) {
                $banner->banners = ImageManager::update('uploads/banner/', $banner->banner, $request->banner);
            }
            $banner->save();
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
            $banner = Banner::findOrFail($id);
            $translation = Translation::where('translationable_type', 'App\Models\Banner')
                ->where('translationable_id', $banner->id);

            $translation->delete();
            $banner->delete();

            $banners = Banner::latest('id')->paginate(10);
            $view = view('backends.banner._table', compact('banners'))->render();

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

            $banner = Banner::findOrFail($request->id);
            $banner->status = $banner->status == 1 ? 0 : 1;
            $banner->save();

            $output = ['status' => 1, 'msg' => __('Status updated')];

            DB::commit();
        } catch (Exception $e) {

            $output = ['status' => 0, 'msg' => __('Something went wrong')];
            DB::rollBack();
        }

        return response()->json($output);
    }
}
