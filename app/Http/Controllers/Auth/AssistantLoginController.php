<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssistantLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login', ['url' => route('assistant.login-view'), 'title'=>'Assistant']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('assistant')->attempt($request->only(['email','password']), $request->get('remember'))){
            session()->forget('url.intended');
            return redirect()->intended('assistant/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        \Auth::guard('assistant')->logout();

        // If you want to invalidate the current session, you can do this:
        $request->session()->invalidate();

        // Redirect to the admin login page or wherever you want after logout
        return redirect('/assistant/login');
    }

}
