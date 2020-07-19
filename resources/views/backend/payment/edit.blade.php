@extends('backend.layouts.master')
@section('title') Chỉnh sửa danh mục @endsection
@section('content')
    <div id="content" class="flex">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Thông tin cấu hình VNPay</strong>
                            </div>
                            <form action="{{ route('admin.payment.update', ['id' => $payment->id]) }}" method="post"
                                  enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">TMN Code</label>
                                        <div class="col-10">
                                            <input type="text" name="vnp_TmnCode" class="form-control"
                                                   value=" {{ $payment-> vnp_TmnCode }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Hash secret</label>
                                        <div class="col-10">
                                            <input type="text" name="vnp_HashSecret" class="form-control"
                                                   value="{{ $payment-> vnp_HashSecret }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">VPN Url</label>
                                        <div class="col-10">
                                            <input type="text" name="vnp_Url" class="form-control"
                                                   value=" {{ $payment-> vnp_Url }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Return Url</label>
                                        <div class="col-10">
                                            <input type="text" name="vnp_Url" class="form-control"
                                                   value=" {{ $payment-> return_Url }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.payment.index') }}"><input type="button"
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
