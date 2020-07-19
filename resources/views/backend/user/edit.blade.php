@extends('backend.layouts.master')
@section('title') Chỉnh sửa thành viên @endsection
@section('content')
  <div id="content" class="flex">
  	<div class="page-content page-container" id="page-content">
  		<div class="padding">
  			<div class="row">
  				<div class="col-12">
  					<div class="card">
  						<div class="card-header">
  							<strong>Thành viên</strong>
  						</div>
              <form action="{{ route('admin.user.update', [$user->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
  						<div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label class="col-form-label" for="">Ảnh đại diện <span class="text-danger">*</span></label>
                      <div class="col-10">
                        <img src="{{ ($user->avatar && file_exists(public_path($user->avatar))) ? $user->avatar : '/images/rsz_noimage.jpg' }}" data-id="avatar" onclick="$('#avatar').click();" style="width:200px;cursor:pointer;">
                        <input type="file" id="avatar" onchange="image_change(this)" name="avatar" class="hide">
                        @error('avatar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-group">
                      <label class="col-form-label" for="">Tên thành viên <span class="text-danger">*</span></label>
                      <div class="col-10">
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control form-control-sm">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="">Tài khoản <span class="text-danger">*</span></label>
                      <div class="col-10">
                        <input type="text" value="{{ $user->username }}" name="username" class="form-control form-control-sm">
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="">Email <span class="text-danger">*</span></label>
                      <div class="col-10">
                        <input type="text" value="{{ $user->email }}" name="email" class="form-control form-control-sm">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-5">
                        <label class="col-form-label" for="">Trạng thái </label>
                        <div class="col-10 col-form-label">
                          <label class="md-switch"><input type="checkbox" name="active" {{ ($user->active==1) ? 'checked' : '' }}> <i class="green"></i></label> Hoạt động
                          @error('active')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>                        
                      </div>
                      <div class="col-5">
                        <label class="col-form-label" for="">Vai trò <span class="text-danger">*</span></label>
                        <div class="col-12">
                          <select name="role" id="" class="form-control form-control-sm">
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ ($role->id==$user->role) ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                          </select>
                          @error('role')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  							<div class="form-group row">
  								<div class="col-12 text-right">
  									<a href="{{ route('admin.user.index') }}"><input type="button" class="btn mb-1 btn-outline-light text-dark" value="Hủy"></a>
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