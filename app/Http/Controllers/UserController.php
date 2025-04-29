<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $ip = $request->ip(); // if you in live server
//        $ip = '102.189.73.31'; // if you in localhost for testing purpose
        $currentUserInfo = Location::get($ip);


        return view('user', compact('currentUserInfo'));

    }
}
