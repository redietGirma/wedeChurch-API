<?php

use Illuminate\Http\Request;
use App\User;
use App\Church;


//route for the user
Route::POST('/user', ['uses' => 'UserController@store']);
Route::get('/user/{id}', ['uses' => 'UserController@show']);
Route::get('/user', ['uses' => 'UserController@index']);
Route::put('/user/{id}', ['uses' => 'UserController@update']);
Route::delete('/user/{id}', ['uses' => 'UserController@delete']);



//route for the church data

Route::POST('/church', ['uses' => 'ChurchController@store',
'middleware' => 'auth.jwt']);
Route::get('/church/{id}', ['uses' => 'ChurchController@show',
    'middleware' => 'auth.jwt']);
Route::get('/church', ['uses' => 'ChurchController@index',
    'middleware' => 'auth.jwt']);
Route::put('/church/{id}', ['uses' => 'ChurchController@update',
    'middleware' => 'auth.jwt']);
Route::delete('/church/{id}', ['uses' => 'ChurchController@delete',
    'middleware' => 'auth.jwt']);

Route::POST('/register',['uses' => 'ApiAuthController@register']);
Route::POST('/signin',['uses' => 'ApiAuthController@signin']);

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
