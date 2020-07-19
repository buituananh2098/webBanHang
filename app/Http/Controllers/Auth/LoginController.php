<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(['username' => $request->username, 'password' => $request->password], $request->filled('remember'));
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $error = trans('messages.login_failed');
        // Load user from database
        $user = User::where($this->username(), $request->{$this->username()})->first();
        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if ($user && \Hash::check($request->password, $user->password) && $user->status != 1) {
            $error = "Tài khoản đã bị vô hiệu hóa.";
        }
        throw ValidationException::withMessages([
            $this->username() => [$error],
        ]);
    }

    public function username()
    {
        return 'username';
    }

    protected function redirectTo()
    {
        // \App\Repositories\DiarySystemRepository::create('Đăng nhập hệ thống', \Auth::user()->id);
        return route('admin.dashboard');
    }

    public function logout(Request $request)
    {
        $user_id = \Auth::user()->id;
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->forget('manageCompany');
        // \App\Repositories\DiarySystemRepository::create('Đăng xuất hệ thống',$user_id);
        return $this->loggedOut($request) ?: redirect('/');        
    }
}
