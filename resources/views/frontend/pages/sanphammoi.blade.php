@extends('frontend.layouts.master')
@section('titlePage', 'Sản phẩm mới')
@section('css')
@endsection
@section('content')
    <div class="grid-list vs-grid-table-wrapper">
        @include('frontend.blocks.productContent')
    </div>
@endsection
