<?php

use App\Http\Controllers\CustomAuthController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//rutele pentru servicii
Route::view('/', "/Index.index");
Route::view('/games', "/Games.games");
Route::view('/recommendations', "/Recommendations.recommendations");
Route::view('/forum', "/Forum.forum");
Route::view('/index', "/Index.index");
Route::view('/auth', "/Index.authentification");

//rutele petnru login si register si logout
Route::get('auth', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');


//rutele pentru profile
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('profile', [ViewUserController::class, 'index'])->name('profile');

//ruta pentru recover_password
Route::get('/recover', function () {
    return view('Index.recover');
})->name('password.request');

//aici intra daca dai submit la email pt recover_password
Route::post('/recover', function (Request $request) {
    //verifica daca s-a introdus email-ul si daca exista
    $request->validate(['email' => 'required|email']);

    //se trimite link-ul pe mail
    $status = Password::sendResetLink(
        $request->only('email')
    );

    //daca s-a trimis email-ul te duce undeva
    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

//aici te redirectioneaza linul de pe mail
Route::get('/reset/{token}', function ($token) {
    return view('Index.reset', ['token' => $token]);
})->name('password.reset');

//aici se intra cand dau submit la noua parola
Route::post('/reset', function (Request $request) {

    //verificam daca datele sunt corecte
    $request->validate([
        'token' => 'required',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required'
    ]);

    //stergem token-ul si schimbam parola
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    //daca totul e ok te redirectioneaza la login
    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);

})->name('password.update');

