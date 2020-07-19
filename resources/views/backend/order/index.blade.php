@extends('backend.layouts.master')
@section('title')
    Quản lý danh mục
@endsection
@section('js')
    <script type="text/javascript">
        $('.trash').click(function () {
            if (confirm('Bạn có muốn xóa?')) {
                window.location.href = '{{ route('admin.category.destroy') }}' + '/' + $(this).attr('data-trash');
            }
        });
    </script>
@endsection
@section('content')
    <div class="padding">
        <div class="mb-2">
            <div class="col-12 text-right">
                <a href="{{ route('admin.order.create') }}"><input type="button"
                                                                     class="btn btn-raised btn-wave blue text-white btn-sm"
                                                                     value="Thêm mới"></a>
            </div>
        </div>
        <div class="mb-5">
            <div class="toolbar">
                <div class="btn-group">
                    <button class="btn btn-sm btn-icon btn-white" data-toggle="tooltip" title="" id="btn-trash"
                            data-original-title="Trash">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-trash text-muted">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                    </button>
                    <button class="btn btn-sm btn-icon btn-white sort" data-sort="item-title" data-toggle="tooltip"
                            title="" data-original-title="Sort"><i class="sorting"></i></button>
                </div>
                <form class="flex">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-theme form-control-sm search"
                               placeholder="Search" required="">
                        <span class="input-group-append">
            <button class="btn btn-white no-border btn-sm" type="button">
              <span class="d-flex text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-search">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
              </span>
            </button>
          </span>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-theme table-row v-middle">
                    <thead>
                    <tr>
                        <th style="width:20px"><label class="ui-check m-0"><input type="checkbox"><i></i></label></th>
                        <th class="text-muted">Id</th>
                        <th class="text-muted">Trạng thái</th>
                        <th class="text-muted">Tiền cọc</th>
                        <th class="text-muted">Giao hàng</th>
                        <th class="text-muted">Thanh toán</th>
                        <th class="text-muted" data-toggle-class="asc" data-class="asc">Địa chỉ</th>
                        <th class="text-muted"><span class="">Người nhận</span></th>
                        <th class="text-muted"><span class="">Số điện thoại</span></th>
                        <th class="text-muted"><span class="">Email</span></th>
                        <th class="text-muted"><span class="">Tổng tiền</span></th>
                        <th style="width:50px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr class="v-middle" style="margin-top: 10px;">
                            <td><label class="ui-check m-0"><input type="checkbox" name="id" value="10"> <i></i></label>
                            </td>
                            <td class="flex">
                                {{ $order->id }}
                            </td>
                            <td class="flex">
                                {{ $order->status }}
                            </td>
                            <td class="flex">
                                {{ $order->money_deposit }}
                            </td>
                            <td class="flex">
                                {{ $order->status_ship }}
                            </td>
                            <td class="flex">
                                {{ $order->status_payment }}
                            </td>
                            <td><span class="item-amount text-sm">{{ $order->address . ', ' . $order->city }}</span></td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_phone_number }}</td>
                            <td>{{ $order->customer_email }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"
                                         x-placement="bottom-end" style="position: absolute; top: 0px; left: 0px;">
                                        <a href="#"
                                           class="dropdown-item edit">xem</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            {{--    <div class="d-flex">--}}
            {{--      <ul class="pagination">--}}
            {{--        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>--}}
            {{--        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>--}}
            {{--        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
            {{--        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
            {{--        <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
            {{--        <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
            {{--        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>--}}
            {{--      </ul>--}}
            {{--      <small class="text-muted py-2 mx-2">Total <span id="count">15</span> items</small>--}}
            {{--    </div>--}}
        </div>
    </div>
@endsection
