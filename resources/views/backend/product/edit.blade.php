@extends('backend.layouts.master')
@section('title') Thêm mới sản phẩm @endsection
@section('js')
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
                            <form action="{{ route('admin.product.update', $product->id) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-4">
                                            @foreach($product->image as $image)
                                                @if(!empty($image))
                                                    <div class="form-group">
                                                        <label for="">Ảnh sản phẩm</label>
                                                        <img src="{{ $image->path }}" data-id="logo"
                                                             onclick="$('#logo').click();"
                                                             style="max-width:300px;cursor:pointer;">
                                                        <input type="file" id="logo" onchange="image_change(this)" name="logo"
                                                               class="hide">
                                                        @error('logo')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Tên sản phẩm</label>
                                                <input type="text" name="name" value="{{ $product->name }}"
                                                       class="form-control">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Mã sản phẩm</label>
                                                <input type="text" name="code" value="{{ $product->code }}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Điểm thưởng</label>
                                                <input type="text" name="reward_points"
                                                       value="{{ $product->reward_points }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Giá sản phẩm</label>
                                                <input type="text" name="cost" value="{{ $product->cost }}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Số lượng sản phẩm</label>
                                                <input type="number" name="quantity" value="{{ $product->quantity }}"
                                                       class="form-control">
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
                                                          class="form-control form-control-line">{{ $product->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Thông tin chi tiết</label>
                                                <textarea name="info_detail"
                                                          class="form-control form-control-line ckeditor">{{ $product->detail->info_detail }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Đặc điểm nổi bật</label>
                                                <textarea name="salient_features"
                                                          class="form-control form-control-line ckeditor">{{ $product->detail->salient_features }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Giới thiệu</label>
                                                <textarea name="introductions"
                                                          class="form-control form-control-line ckeditor">{{ $product->detail->introductions }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-form-label" for="">Quy trình sản xuất</label>
                                                <textarea name="production_process"
                                                          class="form-control form-control-line ckeditor">{{ $product->detail->production_process }}</textarea>
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
