<div class="card-body p-0 table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('Banner') }}</th>
                <th>{{ __('Created By') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{-- <img src="
                        @if ($banner->banners && file_exists(public_path('uploads/banner/' . $banner->banners))) {{ asset('uploads/banner/' . $banner->banners) }}
                        @else
                            {{ asset('uploads/defualt.png') }} @endif
                        "
                            alt="" class="profile_img_table" style="object-fit: cover; width: 50%; height: 5vh;"> --}}
                        <span>
                            <a class="example-image-link" href="{{ asset('uploads/banner/' . $banner->banners) }}"
                                data-lightbox="lightbox-' . $banner->id . '">
                                <img src="
                            @if ($banner->banners && file_exists(public_path('uploads/banner/' . $banner->banners))) {{ asset('uploads/banner/' . $banner->banners) }}
                            @else
                                {{ asset('uploads/defualt.png') }} @endif
                                "
                                    alt="" class="profile_img_table"
                                    style="object-fit: cover; width: 50%; height: 5vh;">
                            </a>
                        </span>

                    </td>
                    <td>{{ $banner->createdBy->name }}</td>
                    <td>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input switcher_input status"
                                id="status_{{ $banner->id }}" data-id="{{ $banner->id }}"
                                {{ $banner->status == 1 ? 'checked' : '' }} name="status">
                            <label class="custom-control-label" for="status_{{ $banner->id }}"></label>
                        </div>
                    </td>
                    <td>
                        @if (auth()->user()->can('banner.edit'))
                            <a href="#" data-href="{{ route('admin.banner.edit', $banner->id) }}"
                                class="btn btn-info btn-sm btn-modal btn-edit" data-toggle="modal"
                                data-container=".modal_form">
                                <i class="fas fa-pencil-alt"></i>
                                {{ __('Edit') }}
                            </a>
                        @endif

                        @if (auth()->user()->can('banner.delete'))
                            <form action="{{ route('admin.banner.destroy', $banner->id) }}"
                                class="d-inline-block form-delete-{{ $banner->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-id="{{ $banner->id }}"
                                    data-href="{{ route('admin.banner.destroy', $banner->id) }}"
                                    class="btn btn-danger btn-sm btn-delete">
                                    <i class="fa fa-trash-alt"></i>
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-12 d-flex flex-row flex-wrap">
            <div class="row" style="width: -webkit-fill-available;">
                <div class="col-12 col-sm-6 text-center text-sm-left pl-3" style="margin-block: 20px">
                    {{ __('Showing') }} {{ $banners->firstItem() }} {{ __('to') }}
                    {{ $banners->lastItem() }}
                    {{ __('of') }} {{ $banners->total() }} {{ __('entries') }}
                </div>
                <div class="col-12 col-sm-6 pagination-nav pr-3"> {{ $banners->links() }}</div>
            </div>
        </div>
    </div>


</div>
