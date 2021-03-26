<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MailingList extends Controller
{
    public function form(){
        return view('email');
    }

    public function submit(Request $request){
        DB::table('emails')->insert(['email' => $request->email]);
        back()->with('post_created', 'Email has been submitted successfully!');
        return view('email_welcome');
        
    }
}
