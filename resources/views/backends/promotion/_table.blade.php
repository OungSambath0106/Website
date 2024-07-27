<div class="card-body p-0 table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('Image') }}</th>
                <th>{{ __('Created By') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $promo)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="
            @if ($promo->images && file_exists(public_path('uploads/promotion/' . $promo->images))) {{ asset('uploads/promotion/' . $promo->images) }}
            @else
                {{ asset('uploads/default.png') }} @endif
            "
                            alt="" class="profile_img_table" style="object-fit: cover; width: 50%; height: 5vh;">
                    </td>
                    <td>{{ $promo->createdBy->name }}</td>
                    <td>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input switcher_input status"
                                id="status_{{ $promo->id }}" data-id="{{ $promo->id }}"
                                {{ $promo->status == 1 ? 'checked' : '' }} name="status">
                            <label class="custom-control-label" for="status_{{ $promo->id }}"></label>
                        </div>
                    </td>
                    <td>
                        @can('promotion.edit')
                            <a href="#" data-href="{{ route('admin.promotion.edit', $promo->id) }}"
                                class="btn btn-info btn-sm btn-modal btn-edit" data-toggle="modal"
                                data-container=".modal_form">
                                <i class="fas fa-pencil-alt"></i>
                                {{ __('Edit') }}
                            </a>
                        @endcan

                        @can('promotion.delete')
                            <form action="{{ route('admin.promotion.destroy', $promo->id) }}"
                                class="d-inline-block form-delete-{{ $promo->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-id="{{ $promo->id }}"
                                    data-href="{{ route('admin.promotion.destroy', $promo->id) }}"
                                    class="btn btn-danger btn-sm btn-delete">
                                    <i class="fa fa-trash-alt"></i>
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="row" style="width: -webkit-fill-available;">
                <div class="col-12 col-sm-6 text-center text-sm-left pl-3" style="margin-block: 20px">
                    {{ __('Showing') }} {{ $promotions->firstItem() }} {{ __('to') }}
                    {{ $promotions->lastItem() }}
                    {{ __('of') }} {{ $promotions->total() }} {{ __('entries') }}
                </div>
                <div class="col-12 col-sm-6 pagination-nav pr-3"> {{ $promotions->links() }}</div>
            </div>
        </div>
    </div>


</div>
