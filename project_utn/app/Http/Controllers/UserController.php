<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function sendEmail(Request $request){
       //$email = $request->input('emailforgetPassword');
       $email = Input::get('emailforgetPassword');
        $name = $request->name;
        echo "The email: " . $email;
        return view('main');
	}
}
