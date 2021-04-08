<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        
        // get the search value from the request form
        $search = $request->input('query');

        //   search the names in the user's table
        $users= User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
        // return the search view
        return view('search', compact('users'));

    }
}
