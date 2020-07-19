@extends('auth.app')
@section('title') @lang('system.forgot_password') @endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="form-horizontal form-control-line text-center">
        @csrf
        <h3 class="text-center m-b-20 mt-4">@lang('system.forgot_password')</h3>
        <div class="form-group @haserror('email') has-danger @endhaserror">
            <div class="col-xs-12">
                <input class="form-control @haserror('email') form-control-danger @endhaserror"
                    type="email" required="" placeholder="@lang('system.email')"
                    name="email" value="{{ old('email') }}"
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-block btn-rounded" type="submit">@lang('system.text_reset_password')</button>
            </div>
        </div>
    </form>
@endsection
