<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/Index.index');
});

Route::get('games', function()
{
    return view('/Games.games');
});

Route::get('recommendations', function()
{
    return view('/Recommendations.recommendations');
});

Route::get('forum', function()
{
    return view('/Forum.forum');
});

Route::get('index', function()
{
    return view('/Index.index');
});
