@extends('home.master')

@section("title")
   ویرایش محصول {{ $product->per_title }}
@stop
@section("content")

    <section class="resume-section" >
        <div class="resume-section-content">
            <h3>
                ویرایش محصول {{ $product->per_title }}
            </h3>
            <div class="mt-5">
                <form action="" >
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ url("/storage/upload")."/".$product->image }}" id="tumbnail" style="width: 100%" alt="">
                            <input type="file" name="image" class="form-control-file pt-2">
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <label for="per_title">عنوان فارسی</label>
                                <input type="text" class="form-control" name="per_title" value="{{ $product->per_title }}"  placeholder="نام فارسی را وارد نمایید">
                                <small id="per_title_error" class="form-text text-muted">@error("per_title"){{ $message }}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label for="eng_title">عنوان لاتین</label>
                                <input type="text" class="form-control" name="eng_title" id="eng_title" value="{{ $product->eng_title }}" placeholder="نام لاتین را وارد نمایید">
                                <small id="eng_title_error" class="form-text text-muted">@error("eng_title"){{ $message }}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label for="files">فایل</label>
                                <input type="file" class="form-control-file" multiple name="files[]">
                                <small id="files_error" class="form-text text-muted">@error("files"){{ $message }}@enderror</small>
                                @foreach($files as $key=>$file)
                                    <a href="{{ url("storage/upload")."/".$file->filename }}">فایل {{ $key+1 }}</a> |
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="files">نوع</label>
                                <select name="type" class="form-control" >
                                    @foreach($type as $row)
                                        <option @if($product->type==$row->id) selected @endif value="{{ $row->id }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>
                                <small id="files_error" class="form-text text-muted">@error("type"){{ $message }}@enderror</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="des">توضیحات</label>
                                <div class="adjoined-bottom">
                                    <div class="grid-width-100">
                                        <textarea name="des" required id="editor"><p style="text-align: right"></p></textarea>

                                    </div>
                                </div>
                                <small id="des_error" class="form-text text-muted">@error("des"){{ $message }}@enderror</small>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <button type="submit" class="btn btn-lg btn-primary col mt-2">تبت</button>
                                </div>
                            </div>
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
    <script>
        $("#eng_title").keyup(function(){
            var title=$("#eng_title").val();
            var message=$("#eng_title_error");
            if(title.indexOf("/")>-1){
                message.html("استفاده از حرف / در غیر مجاز می باشد");
                $("#eng_title").val(title.replace("/",""));
            }else
            {
                message.html("");
            }
        });
    </script>
@stop

@section("css")
    <script src="/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
@stop
