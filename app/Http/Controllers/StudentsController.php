<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function login()
    {
        return view('studentauth.login');
    }

    public function handleLogin(Request $req)
    {
        if (Auth::attempt(
            $req->only(['email', 'password'])
        )) {
            return redirect()->intended('/student');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
    }
}
