<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ViewUserController extends Controller
{
    //
	public function index(){
		$em = session('username');

		$users = DB::table('users')
                ->where('username', '=', $em)
                ->get();
		return view('Index.profile', ['users'=>$users]);
	}
}
