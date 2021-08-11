<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\TopicsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewUserController;
use Illuminate\Support\Facades\Input;
use App\User;

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
Route::view("/forumul/{topic}", "/Forum.forum");
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
Route::post('profile', [ViewUserController::class, 'upload']);


//rutele pentru reset password
require 'reset_password.php';

//rutele pentru forum
Route::get('/forum', [TopicsController::class, 'index']);
Route::get('/forum/{topic}', [TopicsController::class, 'show']);
Route::post('store-topics',[TopicsController::class, 'store'] );
Route::post('/forum/{topic}/update-topics', [TopicsController::class, 'update']);
Route::get('forum/{topic}/delete', [TopicsController::class, 'destroy']);

Route::post('store-replies/{topic}',[RepliesController::class, 'store']);
Route::post('/forum/{reply}/update-replies', [RepliesController::class, 'update']);
Route::get('/forum/{reply}/delete-reply', [RepliesController::class, 'destroy']);
