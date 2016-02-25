<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	//Lista de todos los perfiles en la base de datos
	public function  showProfile()
	{
		$profile = Carrers::all();

        return view('MaintenanceProfile.php', ['carrers' => $profile]);

	}
   
}
