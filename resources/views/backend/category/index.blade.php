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
                <a href="{{ route('admin.category.create') }}"><input type="button"
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
                        <th class="text-muted">Hình ảnh</th>
                        <th class="text-muted" data-toggle-class="asc" data-class="asc">Tên danh mục</th>
                        <th class="text-muted">Loại danh mục</th>
                        <th class="text-muted">Đường dẫn</th>
                        <th class="text-muted"><span class="">Trạng thái</span></th>
                        <th class="text-muted" >Nổi bật </th>
                        <th style="width:50px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($cates as $cate)
                        <tr class="v-middle" style="margin-top: 10px;">
                            <td><label class="ui-check m-0"><input type="checkbox" name="id" value="10"> <i></i></label>
                            </td>
                            <td width="100px">
                                <img class="img-avt" src="{{ !empty($cate->avatar) ? $cate->avatar : '/images/img_err.png' }}" alt="{{ $cate->slug }}">
                            </td>
                            <td class="flex">
                                <a href="{{ $cate->slug }}" class="item-title text-color">{{ $cate->name }}</a>
                            </td>
                            <td>
                                <span class="item-amount  text-xl-left {{ ($cate->is_collection==1) ? 'text-success' : 'text-primary' }}">{{ ($cate->is_collection==1) ? 'Bộ sưu tập' : 'Danh mục' }}</span>
                            </td>
                            <td><span class="item-amount  text-sm">{{ $cate->slug }}</span></td>
                            <td>
                                <span class="item-amount  text-xl-left {{ ($cate->status==1) ? 'text-success' : 'text-danger' }}">{{ ($cate->status==1) ? 'Hoạt động' : 'Ẩn' }}</span>
                            </td>
                            <td>
                                <span class="item-amount  text-xl-left {{ ($cate->highlight==1) ? 'text-success' : 'text-primary' }}">{{ ($cate->highlight==1) ? 'Nổi bật' : 'Không' }}</span>
                            </td>
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
                                        <a href="{{ route('admin.category.edit', $cate->id) }}"
                                           class="dropdown-item edit">Sửa</a>
                                        <a href="{{ route('admin.category.destroy') }}"
                                           class="dropdown-item trash" data-trash="{{ $cate->id }}">Xóa</a>
                                        <a href="{{ route('admin.category.create', $cate->id) }}" class="dropdown-item">Danh
                                            mục con</a>
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
