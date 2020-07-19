@extends('auth.app')
@section('title') Đăng nhập @endsection
@section('content')
    <form class="form-horizontal form-control-line text-center" id="loginform" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mt-3 mb-3">
            <h3>Đăng nhập</h3>
        </div>
        <div class="@haserror('account') form-group @endhaserror">
            @error('account')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group @haserror('username') has-danger @endhaserror">
            <div class="col-xs-12">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Tên đăng nhập">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group @haserror('password') has-danger @endhaserror">
            <div class="col-xs-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="d-flex no-block align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" value="1">
                        <label class="custom-control-label" for="customCheck1">Nhớ tài khoản</label>
                    </div> 
                    <div class="ml-auto">
                        @if (Route::has('password.request'))
                            <a id="to-recover" class="text-muted" href="{{ route('password.request') }}">
                                <i class="fas fa-lock m-r-5"></i> Quên mật khẩu?
                            </a>
                        @endif
                    </div>
                </div>   
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12 d-flex justify-content-center">
                <button class="btn btn-info btn text-uppercase btn-rounded" type="submit">Đăng nhập</button>
            </div>
        </div>
    </form>
@endsection
