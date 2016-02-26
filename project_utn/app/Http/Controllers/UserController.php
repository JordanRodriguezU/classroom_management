<?php

namespace App\Http\Controllers;
use App\User;
use App\Career;
use App\Profile;
use App\Type_user;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    //create user 
	public function create(Request $request){

	}
//load in the datalist all career, profile and type profile
	public function loadCareerProfileTypeUser(){
		$career = Career::all();
		$profile = Profile::all();
		$typeProfile = Type_user::all();
		return view('create',array('carrer' => $career,'profile' => $profile,'typeProfile' =>$typeProfile));
	}

   //load data of the user in the table
	public function loadUser(){
		$user = User::all();
		return view('user',array('user' =>$user));
	}


//this is function the login,is when the user introduced the email and password
	public function login(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		$user = User::where('email', $email)
		->get();	
		
		
	}


//The method works for when the user forget the password

	public function forgetemail(Request $request){
		$user = new User;
		$email = $request->input('emailforgetPassword');		
		$v = "Lo lamento el formato del correo debe ser est.utn.ac.cr";
		if ($user->isValidEmail($email))
		{

			return view('main');
			
		}
		else
		{
			return redirect()->back()->withInput()->withErrors($v->errors());
		}

		/*
		Mail::send('main', $request->all(), function ($m){
			$m->from('hello@app.com', 'Your Application');

			$m->to('aoalvaradog@est.utn.ac.cr')->subject('Correo de prueba!');
		});
	
}
*/

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


