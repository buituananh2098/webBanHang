@extends('backend.layouts.master')
@section('title') Thêm mới danh mục @endsection
@section('content')
    <div id="content" class="flex">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Danh mục</strong>
                            </div>
                            <form action="{{ route('admin.blog_category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="parent_id"
                                       value="{{ !empty($cateParent) ? $cateParent : '0' }}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Tên danh mục</label>
                                        <div class="col-10">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Hiển thị danh mục</label>
                                        <div class="col-10 col-form-label">
                                            <label class="md-switch">
                                                <input type="checkbox" name="status">
                                                <i class="blue"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Hiển thị nổi bật</label>
                                        <div class="col-10 col-form-label">
                                            <label class="md-switch">
                                                <input type="checkbox" name="highlight">
                                                <i class="blue"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.blog_category.index') }}"><input type="button"
                                                                                                 class="btn mb-1 btn-outline-light text-dark"
                                                                                                 value="Hủy"></a>
                                            <input type="submit" class="btn mb-1 bg-primary-lt" value="Xong">
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
@endsection
