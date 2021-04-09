<?php

namespace App\Http\Controllers\StudentAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
// {
//     /**
//      * Display the login view.
//      *
//      * @return \Illuminate\View\View
//      */
//     public function create()
//     {
//         return view('studentauth.login');
//     }

//     /**
//      * Handle an incoming authentication request.
//      *
//      * @param  \App\Http\Requests\Auth\LoginRequest  $request
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function store(Request $request)
//     {
//         $credentials = $request->only('email', 'password');
//         if (Auth::attempt($credentials)) {
//             return redirect()->intended('student');


//         return redirect('student/login');
//         // $request->validate([
//         //     'name' => 'required|string|max:255',
//         //     'email' => 'required|string|email|max:255|unique:users',
//         //     'phone' => 'required|max:20',
//         //     'location' => 'required|string|max:255',
//         //     'password' => 'required|string|confirmed|min:8',
//         // ]);

//         // $request->session()->regenerate();

//         // return redirect()->intended(RouteServiceProvider::HOME);
//         // return redirect()->intended('student');
//     }

//     /**
//      * Destroy an authenticated session.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function destroy(Request $request)
//     {
//         Auth::guard('student')->logout();

//         $request->session()->invalidate();

//         $request->session()->regenerateToken();

//         return redirect('/student');

//     }
// }

{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:student')->except('logout');
        // $this->middleware('guest:agent')->except('logout');
    }

    public function create()
    {
        return view('studentauth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::STUDENTHOME);
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/student/login');

    }
}