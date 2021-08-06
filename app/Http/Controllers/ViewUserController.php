<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ViewUserController extends Controller
{
    // functie care ia informatiile unui utilizator in functie de username
	public function index(){
		$em = session('username');

		$users = DB::table('users')
                ->where('username', '=', $em)
                ->get();
		return view('Auth.profile', ['users'=>$users]);
	}
}
