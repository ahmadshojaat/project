@extends('home.master')

@section("title")
ثبت محصول
    @stop

@section("content")
    <section class="resume-section" >
        <div class="resume-section-content">
            <h3>
                ثبت محصول
            </h3>
            <div class="mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="per_title">نام فارسی</label>
                        <input type="text" class="form-control" name="per_title" required  placeholder="نام فارسی را وارد نمایید">
                        <small id="per_title_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="eng_title">نام لاتین</label>
                        <input type="text" class="form-control" name="eng_title" required  placeholder="نام لاتین را وارد نمایید">
                        <small id="eng_title_error" class="form-text text-muted"></small>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="/image/image-thumbnail.png" style="width: 100%"   id="tumbnail" alt="">
                        </div>
                        <div class="col-lg-10 ">
                            <div class="form-group">
                                <label for="image">تصویر</label>
                                <input type="file" id="image" class="form-control-file" required accept=".jpg,.jpeg,.png,.gif" multiple name="image"  >
                                <small id="image_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="files">فایل</label>
                        <input type="file" class="form-control-file" name="files">
                        <small id="files_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="files">نوع</label>
                        <select name="type" class="form-control">
                            @foreach($type as $row)
                                <option value="{{ $row->id }}">{{ $row->title }}</option>
                            @endforeach
                        </select>
                        <small id="files_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="des">توضیحات</label>
                        <div class="adjoined-bottom">
                            <div class="grid-width-100">
                                <textarea name="des" id="editor"><p style="text-align: right"></p></textarea>
                            </div>
                        </div>
                        <small id="des_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <button type="submit" class="btn btn-lg btn-primary col mt-2">تبت</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @stop

@section("js")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        //show thumbnail
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#tumbnail').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            readURL(this);
        });
    </script>
    <script>
        initSample();
    </script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@stop

@section("css")
    <script src="/ckeditor/ckeditor.js"></script>
{{--    <script src="/ckeditor/samples/js/sample.js"></script>--}}
    <link rel="stylesheet" href="/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
@stop
