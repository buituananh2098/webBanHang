@extends('backend.layouts.master')
@section('title') Thêm mới sản phẩm @endsection
@section('css')
<style>
    .card .card{
        border-bottom: 1px solid #e9e9e9;
    }
</style>
@endsection
@section('content')
    <div id="content" class="flex">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header row">
                                <div class="col-3"><strong>Sản phẩm</strong></div>
                                <div class="col-9 text-right">
                                    <a href="#">Gán thuộc tính</a>
                                </div>
                            </div>
                            <form action="{{ route('admin.product.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="card-header form-group row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="">Ảnh sản phẩm</label>
                                                <img src="/images/plus-v3.png" data-id="logo"
                                                     onclick="$('#logo').click();"
                                                     style="max-width:300px;cursor:pointer;">
                                                <input type="file" id="logo" onchange="image_change(this)" name="logo"
                                                       class="hide">
                                                @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header form-group row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Tên sản phẩm</label>
                                                <input type="text" name="name" class="form-control">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Mã sản phẩm</label>
                                                <input type="text" name="code" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Điểm thưởng</label>
                                                <input type="text" name="reward_points" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Giá sản phẩm</label>
                                                <input type="text" name="cost" class="form-control">

                                            </div>
                                            <div class="form-group">
                                                <a href="javascript:void()">Thêm mã giảm giá</a>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Số lượng sản phẩm</label>
                                                <input type="number" name="quantity" class="form-control">
                                            </div>
                                            @if(count($parents))
                                                <div class="form-group">
                                                    <label class="col-form-label" for="">Danh mục</label>
                                                    <select name="category_id" class="form-control"
                                                            id="select2-multiple" multiple="multiple"
                                                            data-plugin="select2">
                                                        @php
                                                            cat_parent($parents);
                                                        @endphp
                                                    </select>
                                                    @error('category_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Mô tả ngắn</label>
                                                <textarea name="description"
                                                          class="form-control form-control-line"></textarea>
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
                                                   class="collapsed">Thông tin chi tiết</a></div>
                                            <div id="collapseInfoDetail" class="collapse" aria-labelledby="headingInfoDetail"
                                                 data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <textarea name="info_detail"
                                                              class="form-control form-control-line ckeditor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header no-border" id="headingSalientFeatures">
                                                <a href="#"
                                                   data-toggle="collapse"
                                                   data-target="#collapseSalientFeatures"
                                                   aria-expanded="false"
                                                   aria-controls="collapseSalientFeatures"
                                                   class="collapsed">Đặc điểm nổi bật</a></div>
                                            <div id="collapseSalientFeatures" class="collapse" aria-labelledby="headingSalientFeatures"
                                                 data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <textarea name="salient_features"
                                                              class="form-control form-control-line ckeditor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header no-border" id="headingIntroductions">
                                                <a href="#"
                                                   data-toggle="collapse"
                                                   data-target="#collapseIntroductions"
                                                   aria-expanded="false"
                                                   aria-controls="collapseIntroductions"
                                                   class="collapsed">Giới thiệu</a></div>
                                            <div id="collapseIntroductions" class="collapse" aria-labelledby="headingIntroductions"
                                                 data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <textarea name="introductions"
                                                              class="form-control form-control-line ckeditor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header no-border" id="headingProductProccess">
                                                <a href="#"
                                                   data-toggle="collapse"
                                                   data-target="#collapsePP"
                                                   aria-expanded="false"
                                                   aria-controls="collapsePP"
                                                   class="collapsed">Quy trình sản xuất</a></div>
                                            <div id="collapsePP" class="collapse" aria-labelledby="headingProductProccess"
                                                 data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <textarea name="production_process"
                                                              class="form-control form-control-line ckeditor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.product.index') }}"><input type="button"
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
