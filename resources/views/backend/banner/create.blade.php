@extends('backend.layouts.layout')

@section('title')
    Create Banner
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group @if ($errors->has('title')) has-error @endif">
                        <label for="" class="control-label">Title <span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Title ...">
                        {!! $errors->first('title', '<em for="title" class="text-danger fw-bold">:message</em>') !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group @if ($errors->has('description')) has-error @endif">
                        <label for="" class="control-label">Description <span style="color: red">*</span></label>
                        <textarea class="form-control" name="description" id="description" cols="10" rows="10"></textarea>
                        {!! $errors->first('description', '<em for="description" class="text-danger fw-bold">:message</em>') !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group @if ($errors->has('image')) has-error @endif">
                        <label for="image" class="control-label">Image (Max 12MB) <span
                                style="color: red">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" accept=".png,.jpeg,.jpg" name="image"
                                id="image" />
                            <label class="custom-file-label" for="image" id="label_image">Choose file</label>
                        </div>
                        {!! $errors->first('image', '<em for="image" class="text-danger">:message</em>') !!}
                    </div>
                    <div class="row" id="show_image">
                        <div class="col-lg-3">
                            <div class="card card-custom gutter-b">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 mr-7">
                                            <div class="symbol symbol-50 symbol-lg-50">
                                                <img class="w-25 h-25" width="25" height="25" id="preview_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                        onclick="imageRemove()">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group @if ($errors->has('publish')) has-error @endif">
                        <label class="control-label">Publish <span style="color: red">*</span></label>
                        <select name="publish" id="publish" class="form-control text-light input-sm select_2"
                            style="width: 100%;" data-placeholder="Select..*" required>
                            <option></option>
                            <option value="1" class="text-light">Yes</option>
                            <option value="0" class="text-light">No</option>
                        </select>
                        {!! $errors->first('publish', '<p for="publish" class="text-danger">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="">
                    <a href="{{old('previousUrl') ? old('previousUrl') : url()->previous()}}" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-reply"></i> @lang('auth.form_user_cancel_btn')</a>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn ladda-button btn-success btn-sm" data-style="zoom-in">
                        <span class="ladda-label"><i class="fa fa-save"></i> @lang('auth.form_user_submit_btn')</span>
                        <span class="ladda-spinner"><div class="ladda-progress" style="width: 0px;"></div></span></button>
                </div>
                {{-- <div class="col-md-4">
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4 text-end">

                </div> --}}
            </div>

        </form>
    </div>
@endsection
@push('css')
    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ url('plugins/select2/css/select2.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/select2/css/select2-bootstrap.css') }}">
    {{-- Summernote --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.css"
        integrity="sha512-m52YCZLrqQpQ+k+84rmWjrrkXAUrpl3HK0IO4/naRwp58pyr7rf5PO1DbI2/aFYwyeIH/8teS9HbLxVyGqDv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
    <script src="{{ url('plugins/select2/js/select2.full.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"
        integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Content ...*',
                tabsize: 2,
                height: 150,
                fontSizes: ['8', '9', '10', '11', '12', '13', '14', '18', '24', '36', '48', '64', '82',
                    '150'
                ],
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "clear"]],
                    ["fontname", ["fontname"]],
                    ['fontsize', ['fontsize']],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["table", ["table"]],
                    ["view", ["fullscreen", "codeview", "help"]]
                ]
            });
        });
    </script>
    <script type="text/javascript">
        (function() {
            $('#publish').select2({
                theme: "bootstrap",
                placeholder: "Select",
                width: '100%',
                containerCssClass: ':all:',
            });

            $('#show_image').hide();
        })();

        function imageRemove() {
            // $('#image').attr("required", true);
            $('#show_image').hide();
            $('#label_image').text("Choose file");
            $('#image').val("");
        }

        function readURLImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#label_image').text(input.files[0].name);
                    $('#show_image').show();
                    $('#preview_image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            if (this.files[0].size > 10485760) {
                alert("File is too big!");
                this.value = "";
            } else {
                readURLImage(this);
            }
        });
    </script>
    <script>
        //Disable Enter
        $(document).keypress(function(event) {
            if (event.which == '13') {
                event.preventDefault();
            }
        });
    </script>
@endpush
