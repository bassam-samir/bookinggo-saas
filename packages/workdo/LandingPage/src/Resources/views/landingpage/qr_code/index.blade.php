@extends('layouts.main')

@section('page-title')
    {{ __('Landing Page') }}
@endsection

@section('page-breadcrumb')
    {{ __('Landing Page') }}
@endsection

@section('page-action')
    <div class="d-flex">
        <a class="btn btn-sm btn-primary btn-icon me-2"
        data-bs-toggle="modal"
        data-bs-target="#qrcodeModal"
        id="download-qr"
        target="_blanks"
        data-bs-placement="top"
        title="{{ __('Qr Code') }}">
            <span class="text-white"><i class="fa fa-qrcode"></i></span>
        </a>
        <a class="btn btn-sm btn-primary btn-icon" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-original-title="{{ __('Preview') }}" href="{{ url('/') }}" target="-blank"><span
                class="text-white"><i class="ti ti-eye"></i></span></a>
    </div>
@endsection

@section('content')
    <div class="row cms-page-wrp">
        <div class="col-sm-12">
            @include('landing-page::landingpage.sections')
            {{--  Start for all settings tab --}}
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5>{{ __('QR Code Settings') }}</h5>
                        </div>
                        <div id="p1" class="col-auto text-end text-primary h3">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- Start Custom QR-Code --}}
                    <div class="row gy-4">
                        <div class="col-lg-8 col-md-7">
                            <div class="border rounded overflow-hidden p-3">
                            {{ Form::open(['route' => ['landingpage.qrcode_setting'], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate']) }}
                            <div class="theme-detail-card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group input-width">
                                            {{ Form::label('Foreground Color', __('Foreground Color'), ['class' => 'form-label']) }}
                                            <input type="color" name="foreground_color"
                                                value="{{ isset($settings['foreground_color']) ? $settings['foreground_color'] : '#000000' }}"
                                                class="form-control foreground_color qr_data"
                                                data-multiple-caption="{count} files selected" multiple="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group input-width">
                                            {{ Form::label('Background Color', __('Background Color'), ['class' => 'form-label']) }}
                                            <input type="color" name="background_color"
                                                value="{{ isset($settings['background_color']) ? $settings['background_color'] : '#ffffff' }}"
                                                class="form-control background_color qr_data"
                                                data-multiple-caption="{count} files selected" multiple="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{ Form::label('Corner Radius', __('Corner Radius'), ['class' => 'form-label']) }}
                                            <input type="range" name="radius" class="radius qr_data" min="1"
                                                max="50" step="1" style="width:100%;"
                                                value="{{ isset($settings['radius']) ? $settings['radius'] : 26 }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row row-gaps gallery-btn mt-2 mb-2">
                                            @foreach ($qr_code as $k => $value)
                                                <div class="col-auto " id="">
                                                    <label for="enable_{{ $k }}"
                                                        class="btn btn-secondary qr_type">
                                                        <input type="radio" class="d-none btn btn-secondary qr_type_click"
                                                            @if (isset($settings['qr_type']) && $settings['qr_type'] == $k) checked @endif name="qr_type"
                                                            value="{{ $k }}" id="{{ $k }}" /><i
                                                            class="me-2" data-feather="folder"></i>
                                                        {{ __($value) }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <span id="qr_type_option"
                                        style="{{ isset($settings) && $settings == null ? 'display: none' : 'display: block' }}">
                                        <div id="text_div">
                                            <div class="col-md-12 mt-2 ">
                                                <div class="form-group">
                                                    {{ Form::label('Text', __('Text'), ['class' => 'form-label']) }}
                                                    <input type="text" name="qr_text"
                                                        value="{{ isset($settings['qr_text']) ? $settings['qr_text'] : '' }}"
                                                        class="form-control qr_text qr_keyup" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group input-width">
                                                    {{ Form::label('Text Color', __('Text Color'), ['class' => 'form-label']) }}
                                                    <input type="color" name="qr_text_color"
                                                        value="{{ isset($settings['qr_text_color']) ? $settings['qr_text_color'] : '#f50a0a' }}"
                                                        class="form-control qr_text_color qr_data" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2" id="image_div">
                                            <div class="form-group">
                                                {{ Form::label('image', __('Image'), ['class' => 'form-label']) }}

                                                <input type="file" name="image" accept=".png, .jpg, .jpeg"
                                                    class="form-control qr_image qr_data" required>
                                                <input type="hidden" name="old_image" value="">

                                                <img id="image-buffer"
                                                    src="{{ isset($settings['image']) ? get_file($settings['image']) : '' }}"
                                                    class="d-none">

                                            </div>
                                        </div>

                                        <div class="col-md-12" id="size_div">
                                            <div class="form-group">
                                                {{ Form::label('Size', __('Size'), ['class' => 'form-label']) }}
                                                <input type="range" name="size" class="qr_size qr_data"
                                                    value="{{ isset($settings['size']) ? $settings['size'] : 9 }}"
                                                    min="1" max="50" step="1" style="width:100%;"
                                                    required>
                                            </div>
                                        </div>

                                    </span>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between mt-3 pb-0 ">
                                    <h5 class="mb-0"></h5>
                                    <button type="submit" class="btn btn-primary"> <i
                                            data-feather="folder"></i>&nbsp;{{ __('Save Changes') }} </button>
                                </div>
                            </div>
                            {{ Form::close() }}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="theme-preview border">
                                <div class=" code">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Custom QR-Code  --}}
                </div>
            </div>
            {{--  End for all settings tab --}}
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('packages/workdo/LandingPage/src/Resources/assets/js/jquery.qrcode.js') }}"></script>
    <script src="{{ asset('packages/workdo/LandingPage/src/Resources/assets/js/jquery.qrcode.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTrigger = document.getElementById('download-qr');
            var tooltip = new bootstrap.Tooltip(tooltipTrigger);
        });
    </script>
    <script>
        // this script will run when page will load at first time
        var qr_type_click = $('.qr_type_click').val();
        if (qr_type_click == 0) {
          $('.qr_keyup').removeAttr('required','required');
          $('.qr_text_color').removeAttr('required', 'required');
          $('.qr_size').removeAttr('required', 'required');
          $('.qr_image').removeAttr('required', 'required');
          $('.qr_size').removeAttr('required', 'required');
        }
        // end


        $('.qr_type').on('click', function() {
            $("input[type=radio][name='qr_type']").attr('checked', false);
            $("input[type=radio][name='qr_type']").parent().removeClass('btn-primary');
            $("input[type=radio][name='qr_type']").parent().addClass('btn-secondary');


            var value = $(this).children().attr('checked', true);
            var qr_type_val = $(this).children().attr('id');

            if (qr_type_val == 0) {
                $('#qr_type_option').slideUp();
                $(this).removeClass('btn-secondary');
                $(this).addClass('btn-primary');
                $('.qr_keyup').removeAttr('required', 'required');
                $('.qr_text_color').removeAttr('required', 'required');
                $('.qr_image').removeAttr('required', 'required');
                $('.qr_size').removeAttr('required', 'required');
            } else if (qr_type_val == 2) {
                $('#qr_type_option').slideDown();
                $('#text_div').slideDown();
                $('#image_div').slideUp();
                $(this).removeClass('btn-secondary');
                $(this).addClass('btn-primary');
                $('.qr_keyup').attr('required', 'required');
                $('.qr_text_color').attr('required', 'required');
                $('.qr_size').attr('required', 'required');
                $('.qr_image').removeAttr('required', 'required');
                $('.qr_size').removeAttr('required', 'required');
            } else if (qr_type_val == 4) {
                $('#qr_type_option').slideDown();
                $('#text_div').slideUp();
                $('#image_div').slideDown();
                $(this).removeClass('btn-secondary');
                $(this).addClass('btn-primary');
                $('.qr_image').attr('required', 'required');
                $('.qr_size').attr('required', 'required');
                $('.qr_keyup').removeAttr('required', 'required');
                $('.qr_text_color').removeAttr('required', 'required');
                $('.qr_size').removeAttr('required', 'required');
            }
            generate_qr();
        });

        function generate_qr() {

            if ($("input[name='qr_type']:checked").parent().hasClass('btn-primary') == false) {
                var chekced = $("input[name='qr_type']:checked").parent().addClass('btn-primary');
                var qr_type_val = $("input[name='qr_type']:checked").attr('id');
                if (qr_type_val == 0) {
                    $('#qr_type_option').slideUp();
                    $(this).removeClass('btn-secondary');
                    $(this).addClass('btn-primary');
                } else if (qr_type_val == 2) {
                    $('#qr_type_option').slideDown();
                    $('#text_div').slideDown();
                    $('#image_div').slideUp();
                    $(this).removeClass('btn-secondary');
                    $(this).addClass('btn-primary');
                } else if (qr_type_val == 4) {
                    $('#qr_type_option').slideDown();
                    $('#text_div').slideUp();
                    $('#image_div').slideDown();
                    $(this).removeClass('btn-secondary');
                    $(this).addClass('btn-primary');
                }

            }
            var landing_url = '{{ env('APP_URL') }}';
            $('.code').empty().qrcode({
                render: 'image',
                size: 500,
                ecLevel: 'H',
                minVersion: 3,
                quiet: 1,
                text: landing_url,
                fill: $('.foreground_color').val(),
                background: $('.background_color').val(),
                radius: .01 * parseInt($('.radius').val(), 10),
                mode: parseInt($("input[name='qr_type']:checked").val(), 10),
                label: $('.qr_text').val(),
                fontcolor: $('.qr_text_color').val(),
                image: $("#image-buffer")[0],
                mSize: .01 * parseInt($('.qr_size').val(), 10)
            });
        }



        $('.qr_data').on('change', function() {
            generate_qr();
        });

        $('.qr_keyup').on('keyup', function() {
            generate_qr();
        });


        $(document).on('change', '.qr_image', function(e) {
            var img_reader, img_input = $('.qr_image')[0];
            img_input.files && img_input.files[0] && ((img_reader = new window.FileReader).onload = function(
                event) {
                $("#image-buffer").attr("src", event.target.result);
                setTimeout(generate_qr, 250)
                // ) generate_qr();
            }, img_reader.readAsDataURL(img_input.files[0]))
        });
        generate_qr();
    </script>
@endpush
