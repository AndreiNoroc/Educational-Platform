<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TopicsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewUserController;

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

//rutele pentru reset password
require 'reset_password.php';

//rutele pentru forum
Route::get('/forum', [TopicsController::class, 'index']);
Route::get('/forum/{topic}', [TopicsController::class, 'show']);
Route::get('/new-topics', [TopicsController::class, 'create']);
Route::post('store-topics',[TopicsController::class, 'store'] );
Route::get('/forum/{topic}/edit', [TopicsController::class, 'edit']);
Route::post('/forum/{topic}/update-topics', [TopicsController::class, 'update']);
Route::get('forum/{topic}/delete', [TopicsController::class, 'destroy']);
