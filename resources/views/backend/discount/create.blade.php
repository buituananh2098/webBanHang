@extends('backend.layouts.master')
@section('title') Tạo mã giảm giá @endsection
@section('content')
    <div id="content" class="flex">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tạo mã giảm giá</strong>
                            </div>
                            <form action="{{ route('admin.discount.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Mã </label>
                                        <div class="col-10">
                                            <input type="text" name="code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Mô tả mã </label>
                                        <div class="col-10">
                                            <textarea name="description"
                                                      class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Kiểu giảm giá </label>
                                        <div class="col-10 row">
                                            <div class="col-3">
                                                <select name="type_discount" class="form-control">
                                                    <option value="1">Tiền</option>
                                                    <option value="2">Phần trăm</option>
                                                </select>
                                            </div>
                                            <div class="col-9 form-group row">
                                                <label class="col-4 col-form-label" for="">Giá trị giảm  </label>
                                                <div class="col-8" >
                                                    <input type="number" name="value_discount" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Ngày bắt đầu </label>
                                        <div class="col-10 row">
                                            <div class="col-4">
                                                <input type="date" name="start_date" class="form-control">
                                            </div>
                                            <div class="col-8 form-group row">
                                                <label class="col-6 col-form-label" for="">Ngày kết thúc </label>
                                                <div class="col-6">
                                                    <input type="date" name="expired_date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Số lượng mã </label>
                                        <div class="col-10">
                                            <input type="text" name="quantity" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.discount.index') }}"><input type="button"
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
