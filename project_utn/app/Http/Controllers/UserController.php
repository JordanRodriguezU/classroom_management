<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function sendEmail(Request $request){
       $email = $request->input('emailforgetPassword');
        return view('main');
	}
}
