<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;

class UserController extends Controller
{
    public function index()
    {
        $profiles = DB::table('users')->where('name', Auth::user()->name)->get();
        return view('profile', ['profiles' => $profiles]);
    }
}
