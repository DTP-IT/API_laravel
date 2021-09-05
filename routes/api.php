<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/student','StudentController@index');
Route::resource('student', 'StudentController');

//Chỉ dùng các phương thức trong only
//Route::resource('student', 'StudentController')->only(['index','show','update','delete']);
//Không dùng các phương thức trong except
//Route::resource('student', 'StudentController')->except(['create','edit']);

//Route::resource('/', 'HomeController@index');