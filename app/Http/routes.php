<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@main');
Route::get('sub/{id}', 'PageController@sub');
Route::get('prod/{id}', 'PageController@prod');

Route::delete('product/{id}', ['uses' => 'DeleteController@pdestroy', 'as'=>'proddeath']);
Route::delete('subprod/{id}', ['uses' => 'DeleteController@sdestroy', 'as'=>'subdeath']);
Route::delete('mainprod/{id}', ['uses' => 'DeleteController@mdestroy', 'as'=>'maindeath']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});