<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SessionController;

class CustomAuthController extends Controller
{

    //ceea ce se vede prima oara cand se intra pe authorization
    public function index()
    {
        return view('Index.login');
    }

    //functia ce se apeleaza cand se da submit la login
    public function customLogin(Request $request)
    {
        //se verifica daca username-ul si parola nu sunt goale
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        //??
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {

            //aici cream o sesiune numita username in care se pastreaza username-ul
            // celui care tocmai s-a logat
        	$data = $request->input();
			$request->session()->put('username', $data['username']);

			//daca totul merge bine ne reintoarcem in pagina principala
            return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }

        //daca este eroare ramanem pe partea de login
        return redirect("login?login=false")->withSuccess('Login details are not valid');
//        return response()->json(['message' => 'Username or Password does not match'], 401);
    }


    //la ruta asta se gaseste registerul
    public function registration()
    {
        return view('Index.register');
    }


    //functie ce se ocupa cu ce se intampla dupa ce dai submit la register
    public function customRegistration(Request $request)
    {
        //se valideaza variabilele primite
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        //daca totul este ok se apeleaza create pentru a adauga noul user in baza de date
        $data = $request->all();
        $check = $this->create($data);

        // daca merge sa te inregistrezi te duce la login
        return redirect("login")->withSuccess('You have signed-in');
    }

    //functie pentru a crea un nou user in baza de date
    public function create(array $data)
    {
      return User::create([
        'firstname' => $data['firstname'],
        'lastname' => $data['lastname'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('Index.authentification');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    //functie petnru logout, incheie sesiunea si se pierd tate variabilele
    public function signOut() {
        Session::flush();
        Auth::logout();
        //la final te reintoarce la login
        return Redirect('login');
    }
}
