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
    return view('welcome');
});
Route::namespace('App\Http\controllers')->middleware('guest')->group(function (){
    Route::prefix('')->group(function (){
        Route::resource('photos', 'PhotoController');
    });
});
Route::get('blade',function (){
    return view('index');
});
