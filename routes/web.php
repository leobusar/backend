<?php

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
/*
Route::get('/ret', function () {
    return "Welcome User";
});

Route::get('/users', "ShowController@index");

Route::get('/user/view/{id}/{name}', "ShowController@view2")
->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', "ShowController@view");


Route::get('/user/{id}', function ($id) {
    return "Welcome User $id";
});
*/
//Route::controller('/myuser', "UserController");

Route::resource('/empleado', "EmpleadoController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
