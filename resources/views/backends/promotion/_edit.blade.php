@push('css')
@endpush
<div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{ __('New Promotion') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="{{ route('admin.promotion.update', $promotion->id) }}" enctype="multipart/form-data"
            class="submit-form" method="post">
            <div class="modal-body">
                @csrf
                @method('PUT')
                <div class="form-group col-md-12">
                    <div class="form-group">
                        <label for="exampleInputFile">{{ __('Image') }}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="hidden" name="images" class="image_hidden">
                                <input type="file" class="custom-file-input image-file-input" id="exampleInputFile"
                                    name="image">
                                <label class="custom-file-label"
                                    for="exampleInputFile">{{ $promotion->images ? basename($promotion->images) : __('Choose file') }}</label>
                            </div>
                        </div>
                        <div class="preview preview-multiple text-center border rounded mt-2" style="height: 150px">
                            <img src="
                            @if ($promotion->images && file_exists(public_path('uploads/promotion/' . $promotions->images))) @else
                             {{ asset('uploads/defualt.png') }} @endif"
                                alt="" height="100%">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                <button type="submit" class="btn btn-primary submit">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $('.image-file-input').change(function(e) {
        var reader = new FileReader();
        var preview = $(this).closest('.form-group').find('.preview img');
        reader.onload = function(e) {
            preview.attr('src', e.target.result).show();
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
