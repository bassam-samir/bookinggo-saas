{{ Form::open(['route' => 'feature_store', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate']) }}
<div class="modal-body">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('Heading', __('Heading'), ['class' => 'form-label']) }}
                {{ Form::text('feature_heading', null, ['class' => 'form-control ', 'placeholder' => __('Enter Heading'), 'required' => 'required']) }}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('Description', __('Description'), ['class' => 'form-label']) }}
                {{ Form::textarea('feature_description', null, ['class' => 'summernote form-control', 'placeholder' => __('Enter Description'), 'id' => 'feature_des', 'required' => 'required']) }}
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('More', __('More Details Link'), ['class' => 'form-label']) }}
                {{ Form::text('feature_more_details_link', null, ['class' => 'form-control ', 'placeholder' => __('Enter Details Link'), 'required' => 'required']) }}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('More Details Link Button Text', __('More Details Link Button Text'), ['class' => 'form-label']) }}
                {{ Form::text('feature_more_details_button_text', null, ['class' => 'form-control', 'placeholder' => __('Enter Button Text'),'required' => 'required']) }}
            </div>
        </div>

        <div class="col-md-12">

            <div class="form-group mb-0">
                {{ Form::label('Logo', __('Logo'), ['class' => 'form-label']) }}
                <input type="file" name="feature_logo" class="form-control" required>
            </div>
        </div>

    </div>
</div>
<div class="modal-footer gap-3">
    <input type="button" value="{{ __('Cancel') }}" class="btn m-0 btn-secondary" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Create') }}" class="btn m-0 btn-primary">
</div>
{{ Form::close() }}

@push('css')
    <link href="{{ asset('assets/js/plugins/summernote-0.8.18-dist/summernote-lite.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/plugins/summernote-0.8.18-dist/summernote-lite.min.js') }}"></script>
@endpush
