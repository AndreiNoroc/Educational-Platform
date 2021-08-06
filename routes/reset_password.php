<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

//ruta pentru recover_password
Route::get('/recover', function () {
    return view('Auth.recover');
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
        ? view("Auth.emailconfirm")
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

//aici te redirectioneaza linul de pe mail
Route::get('/reset/{token}', function ($token) {
    return view('Auth.reset', ['token' => $token]);
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
