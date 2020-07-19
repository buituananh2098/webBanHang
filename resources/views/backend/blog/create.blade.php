@extends('backend.layouts.master')
@section('title') Thêm mới sản phẩm @endsection
@section('css')
    <style>
        .card .card{
            border-bottom: 1px solid #e9e9e9;
        }
    </style>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
{{--    <script src="resources/views/backend/ckeditor/ckeditor.js"></script>--}}
@endsection
@section('content')
    <div id="content" class="flex">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Sản phẩm</strong>
                            </div>
                            <form action="{{ route('admin.blog.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="card-header form-group row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="">Ảnh Blog</label>
                                                {{--                                                @foreach($images as $image )--}}
                                                <img src="/images/plus-v3.png" data-id="logo"
                                                     onclick="$('#logo').click();"
                                                     style="max-width:300px;cursor:pointer;">
                                                <input type="file" id="logo" onchange="image_change(this)" name="image"
                                                       class="hide" multiple>
                                                @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header form-group row">
                                        <div class="col-6">
{{--                                            <div class="form-group">--}}
{{--                                                <label class="col-form-label" for="">Mã bài viết</label>--}}
{{--                                                <input type="text" name="code" class="form-control">--}}
{{--                                            </div>--}}
                                            @if(count($parents))
                                                <div class="form-group">
                                                    <label class="col-form-label" for="">Danh mục</label>
                                                    <select name="blog_category_id" class="form-control"
                                                            id="select2-multiple"
                                                            data-plugin="select2">
                                                        @foreach($parents as $key)
                                                        <option value="{{$key -> id}}" >
                                                            {{$key -> name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('blog_category_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Tiêu đề bài viết</label>
                                                <input type="text" name="title_blog" class="form-control">
                                                @error('title_blog')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Tác giả </label>
                                                <input type="text" name="author_blog" class="form-control">
                                                @error('author_blog')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion" class="mb-4">
                                        <div class="card mb-1">
                                            <div class="card-header no-border" id="headingInfoDetail">
                                                <a href="#"
                                                   data-toggle="collapse"
                                                   data-target="#collapseInfoDetail"
                                                   aria-expanded="false"
                                                   aria-controls="collapseInfoDetail"
                                                   class="collapsed">Nội dung</a></div>
                                            <div id="collapseInfoDetail" class="collapse" aria-labelledby="headingInfoDetail"
                                                 data-parent="#accordion" style="">
                                                <div class="card-body" >
                                                    <textarea  name="editor1" id="editor1"
                                                              class="form-control form-control-line ckeditor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.blog.index') }}"><input type="button"
                                                                                                class="btn mb-1 btn-outline-light text-dark"
                                                                                                value="Hủy"></a>
                                            <input type="submit" onclick="validateForm()" class="btn mb-1 bg-primary-lt" value="Xong">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            {{--filebrowserUploadUrl: "{{route('admin.blog.store', ['_token' => csrf_token() ])}}",--}}
            filebrowserUploadMethod: 'form',
            filebrowserImageUploadUrl: "/uploads/upload.php?type=image"
        });

        function validateForm() {
            var image_ = document.getElementById("image").value;
            var tieu_de = document.getElementsByClassName("title_blog").value;
            var tac_gia = document.getElementById("author_blog").value;
            var conten_ = document.getElementById("editor1").value;
            if(tieu_de == null){
                alert('1111111111111111');
                return false;
            }
        }
    </script>
@endsection
