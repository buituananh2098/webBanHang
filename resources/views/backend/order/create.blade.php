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
                            <form action="{{ route('admin.order.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="parent_id"
                                       value="{{ !empty($cateParent) ? $cateParent : '0' }}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Trạng thái</label>
                                        <div class="col-10">
                                            <input type="text" name="status" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Tiền cọc</label>
                                        <div class="col-10">
                                            <input type="text" name="money_deposit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2  col-form-label" for="">Giao hàng</label>
                                        <div class="col-10">
                                        <select  name="status_ship" class="form-control"
                                                id="select2-multiple" data-plugin="select2">
                                            <option>Đã giao hàng</option>
                                            <option>Chưa giao hàng </option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2  col-form-label" for="">Thanh toán</label>
                                        <div class="col-10">
                                            <select  name="status_payment" class="form-control"
                                                     data-plugin="select2">
                                                <option>Đã thanh toán</option>
                                                <option>Chưa thanh toán </option>
                                                <option>Chờ xử lý </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Địa chỉ</label>
                                        <div class="col-10">
                                            <input type="text" name="customer_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Người nhận</label>
                                        <div class="col-10">
                                            <input type="text" name="customer_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Số điện thoại</label>
                                        <div class="col-10">
                                            <input type="text" name="customer_phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Email</label>
                                        <div class="col-10">
                                            <input type="text" name="customer_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Tổng tiền</label>
                                        <div class="col-10">
                                            <input type="text" name="total_price" class="form-control">
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
