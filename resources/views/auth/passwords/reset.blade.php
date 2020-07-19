@extends('auth.app')
@section('title') @lang('messages.reset') @endsection
@section('content')
    <form method="POST" action="{{ route('password.update') }}" class="form-horizontal form-control-line text-center">
        @csrf
        <h3 class="text-center m-b-20 mt-4">@lang('messages.reset')</h3>
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group @haserror('email') has-danger @endhaserror">
            <div class="col-xs-12">
                <input class="form-control @haserror('email') form-control-danger @endhaserror"
                    type="email" required="" placeholder="@lang('system.email')"
                    name="email" value="{{ $email ?? old('email') }}" autofocus
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group @haserror('password') has-danger @endhaserror">
            <div class="col-xs-12">
                <input class="form-control @haserror('password') form-control-danger @endhaserror"
                    type="password" required="" placeholder="@lang('system.password')"
                    name="password"
                />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group @haserror('password_confirmation') has-danger @endhaserror">
            <div class="col-xs-12">
                <input class="form-control @haserror('password_confirmation') form-control-danger @endhaserror"
                    type="password" required="" placeholder="@lang('system.password_confirmation')"
                    name="password_confirmation" value=""
                    id="password-confirm"
                />
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-block btn-rounded" type="submit">@lang('messages.reset')</button>
            </div>
        </div>
    </form>
@endsection
