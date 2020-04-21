<?php

use Illuminate\Http\Request;
use App\Page;

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

Route::get('/users', 'UserController')->middleware('auth:api');

Route::get('pages', 'PageController@index');
Route::get('pages/{page}', 'PageController@show');
Route::post('pages', 'PageController@store');
Route::put('pages/{page}', 'PageController@update');
Route::delete('pages/{page}', 'PageController@delete');
