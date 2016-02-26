<?php

namespace App\Http\Controllers;

use App\Http\Input;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;


class UserController extends Controller
{

	public function sendEmail(Request $request){
       //$email = $request->input('emailforgetPassword');
		$email = Input::get('emailforgetPassword');
		$name = $request->name;
		echo "The email: " . $email;
		return view('main');
	}

	//Obtiene todos los profile que existen en la tabla
	public function showProfile()
	{
		$profile = Profile::all();

		return view('MaintenanceProfile', array('profiles' => $profile));	
	}

	//Elimina un perfil
	public function getProfile(Request  $request)
	{
		$id = $request->input('id');

		$profile = Profile::find($id);
        $profile->delete();

		return response()->json([
			'status' => 'valid',
			]);

	}

}
