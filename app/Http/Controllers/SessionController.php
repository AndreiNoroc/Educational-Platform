<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
	public function getSessionData(Request $request) {

		if ($request->session()->has('email')) {
			echo $request->session()->has('email');
		} else {
			echo 'NO DATA!';
		}
	}

	public function storeSessionData(Request $request, String $email) {

		$request->session()->put('email', $email);
	}

	public function deleteSessionData(Request $request) {

		$request->session()->forget('email');
	}
}
