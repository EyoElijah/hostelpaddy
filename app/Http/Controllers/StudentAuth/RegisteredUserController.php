<?php

namespace App\Http\Controllers\StudentAuth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:student');
        // $this->middleware('guest:agent');
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('studentauth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|max:20',
            'location' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($student));

        return redirect(RouteServiceProvider::STUDENTHOME);
    }
}
