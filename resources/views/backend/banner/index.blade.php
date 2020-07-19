@extends('backend.layouts.master')
@section('title')
    Quản lý danh mục
@endsection
@section('js')
    <script type="text/javascript">
        $('.trash').click(function () {
            if (confirm('Bạn có muốn xóa?')) {
                window.location.href = '{{ route('admin.banner.destroy') }}' + '/' + $(this).attr('data-trash');
            }
        });
    </script>
@endsection
@section('content')
    <div class="padding">
        <div class="mb-2">
            <div class="col-12 text-right">
                <a href="{{ route('admin.banner.create') }}"><input type="button"
                                                                    class="btn btn-raised btn-wave blue text-white btn-sm"
                                                                    value="Thêm mới"></a>
            </div>
        </div>
        <div class="mb-5">
            <div class="table-responsive">
                <table class="table table-theme table-row v-middle">
                    <thead>
                    <tr>
                        <th class="text-muted"></th>
                        <th style="width: 50px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($banner as $item)
                        <tr class="v-middle text-center" style="margin-top: 10px;">
                            <td>
                                <img src="{{ !empty($item->path) ? $item->path : '/images/img_err.png' }}"
                                     alt="{{ $item->alt }}" width="80%">
                            </td>
                            <td><a class="trash" href="#"  data-trash="{{ $item->id }}">
                                <div class="col-6 col-sm-3 py-3 text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-trash-2 mx-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
