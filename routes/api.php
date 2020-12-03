<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('todo', 'TodoController');


Route::get('posts', 'VuepostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'VuepostController@add');
    Route::get('edit/{id}', 'VuepostController@edit');
    Route::post('update/{id}', 'VuepostController@update');
    Route::delete('delete/{id}', 'VuepostController@delete');
});