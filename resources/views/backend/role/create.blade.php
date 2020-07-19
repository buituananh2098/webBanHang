@extends('backend.layouts.master')
@section('title') Thêm mới vai trò @endsection
@section('content')
  <div id="content" class="flex">
  	<div class="page-content page-container" id="page-content">
  		<div class="padding">
  			<div class="row">
  				<div class="col-12">
  					<div class="card">
  						<div class="card-header">
  							<strong>Vai trò</strong>
  						</div>
              <form action="{{ route('admin.role.store') }}" method="post" enctype="multipart/form-data">
                @csrf
  						<div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <label class="col-form-label col-4 text-right" for="">Tên vai trò <span class="text-danger">*</span></label>
                      <div class="col-4">
                        <input type="text" name="name" class="form-control form-control-sm">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-4 text-right" for="">Trạng thái </label>
                      <div class="col-8 col-form-label">
                        <label class="md-switch"><input type="checkbox" name="active"> <i class="green"></i></label> Hoạt động
                        @error('active')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
  							<div class="form-group row">
  								<div class="col-12 text-right">
  									<a href="{{ route('admin.role.index') }}"><input type="button" class="btn mb-1 btn-outline-light text-dark" value="Hủy"></a>
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