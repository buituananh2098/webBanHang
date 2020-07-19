@extends('backend.layouts.master')
@section('title')
  Quản lý thành viên
@endsection
@section('js')
  <script type="text/javascript">
    $('.trash').click(function() {
      if (confirm('Bạn có muốn xóa?')) {
        window.location.href = '{{ route('admin.user.destroy') }}'+'/'+$(this).attr('data-trash');
      }
    });
  </script>
@endsection
@section('content')
<div class="padding">
  <div class="mb-2">
    <div class="col-12 text-right">
      <a href="{{ route('admin.user.create') }}"><input type="button" class="btn btn-raised btn-wave blue text-white btn-sm" value="Thêm mới"></a>
    </div>
  </div>
  <div class="mb-5">
    <div class="toolbar">
      <div class="btn-group">
        <button class="btn btn-sm btn-icon btn-white" data-toggle="tooltip" title="" id="btn-trash" data-original-title="Trash">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash text-muted">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
          </svg>
        </button>
        <button class="btn btn-sm btn-icon btn-white sort" data-sort="item-title" data-toggle="tooltip" title="" data-original-title="Sort"><i class="sorting"></i></button>
      </div>
      <form class="flex">
        <div class="input-group">
          <input type="text" class="form-control form-control-theme form-control-sm search" placeholder="Search" required=""> 
          <span class="input-group-append">
            <button class="btn btn-white no-border btn-sm" type="button">
              <span class="d-flex text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
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
            <th style="width:30px" class="text-muted" data-toggle-class="asc" data-class="asc">ID</th>
            <th class="text-muted" width="80px">Avatar</th>
            <th class="text-muted">Tên thành viên</th>
            <th class="text-muted">Email</th>
            <th class="text-muted">Trạng thái</th>
            <th style="width:50px"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr class="v-middle">
            <td><label class="ui-check m-0"><input type="checkbox" name="id" value="10"> <i></i></label></td>
            <td>{{ $user->id }}</td>
            <td><img src="{{ $user->avatar }}" alt="" width="60px"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><span class="item-amount  text-xl-left {{ ($user->active==1) ? 'text-success' : 'text-danger' }}">{{ ($user->active==1) ? 'Đang hoạt động' : 'Vô hiệu hóa' }}</span></td>
            <td>
            <td>
              <div class="item-action dropdown">
                <a href="#" data-toggle="dropdown" class="text-muted" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="12" cy="5" r="1"></circle>
                    <circle cx="12" cy="19" r="1"></circle>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-black" role="menu" x-placement="bottom-end" style="position: absolute; top: 0px; left: 0px;">
                  <a href="{{ route('admin.user.edit', $user->id) }}" class="dropdown-item edit">Sửa</a>
                  <a href="javascript:void()" class="dropdown-item trash" data-trash="{{ $user->id }}">Xóa</a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
      </ul>
      <small class="text-muted py-2 mx-2">Total <span id="count">15</span> items</small>
    </div>
  </div>
</div>
@endsection