<?php
//vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesUsers.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    // protected function guard()
    // {
    //     return Auth::guard('admin');
    // }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        \Auth::guard('admin')->logout();

        // If you want to invalidate the current session, you can do this:
        $request->session()->invalidate();

        // Redirect to the admin login page or wherever you want after logout
        return redirect('/admin/login');
    }
}
