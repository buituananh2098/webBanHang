@extends('backend.layouts.master')
@section('title') Thêm mới banner @endsection
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
                            <form action="{{ route('admin.banner.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Banner<br><span class="text-muted text-sm">(1190x357)</span></label>
                                        <div class="col-10" style="border: 1px solid #c9c9c9; width: 1190px; height: 357px; padding: 10px; overflow: hidden">
                                            <img src="/images/plus-v3.png" data-id="logo" onclick="$('#logo').click();"
                                                 class="att-img-point">
                                            <input type="file" id="logo" onchange="image_change(this)" name="avatar"
                                                   class="hide">
                                            @error('avatar')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Tên banner</label>
                                        <div class="col-10">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Tiêu đề</label>
                                        <div class="col-10">
                                            <input type="text" name="alt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Đường dẫn</label>
                                        <div class="col-10">
                                            <input type="text" name="link" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Vị trí</label>
                                        <div class="col-10">
                                            <input type="text" name="sort" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.category.index') }}"><input type="button"
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
