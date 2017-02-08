<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class LoginController extends Controller
{

    public function Index()
    {
    	$User = DB::table('admin')->where('username', 'like', '%a%')->get();

    	return view('Login/Login', ['User' => $User]);

    }

}
