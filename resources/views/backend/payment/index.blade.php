@extends('backend.layouts.master')
@section('title')
    Quản lý danh mục
@endsection
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
                                <strong>Danh mục</strong>
                            </div>
                                <label type="hidden" name="parent_id" value="{{$payment[0]-> vnp_TmnCode  }}"/>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">TMN Code</label>
                                        <div class="col-10">
                                            <label type="text" name="name" class="form-control"
                                                   value="">
                                                {{ $payment[0]-> vnp_TmnCode }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">Hash secret</label>
                                        <div class="col-10">
                                            <label type="text" name="name" class="form-control"
                                                   value="">
                                                {{ $payment[0]-> vnp_HashSecret }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">VPN Url</label>
                                        <div class="col-10">
                                            <label type="text" name="name" class="form-control"
                                                   value="">
                                                {{ $payment[0]-> vnp_Url }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="">VPN Url</label>
                                        <div class="col-10">
                                            <label type="text" name="name" class="form-control"
                                                   value="">
                                                {{ $payment[0]-> return_Url }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('admin.payment.edit', $payment[0]->id) }}"><input type="button"
                                                                                                 class="btn mb-1 btn-outline-light text-dark"
                                                                                                 value="Sửa"></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
