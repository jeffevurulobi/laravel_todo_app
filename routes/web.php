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

Route::get('todos', "TodosController@todos");

//dynamic routing started
Route::get('todos/{todo}', "TodosController@show");
//dynamic routing ended

Route::get('new-todo', "TodosController@create");

//getting users input routing started()
Route::post('store-todos', "TodosController@store");
//getting users input ended()

//dynamic routing started
Route::get('todos/{todo}/edit', "TodosController@edit");
//dynamic routing ended

//updating todos route
Route::post('todos/{todo}/update-todos', "TodosController@update");
//deleting the todos
Route::get('todos/{todo}/delete', "TodosController@destroy");

Route::get('todos/{todo}/complete', "TodosController@complete");
