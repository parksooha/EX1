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

Route::get('/', 'HomeController@index');

route::get('/about', 'HomeController@about');

route::get('/contact', 'HomeController@contact');

route::get('/user', 'UserController@index');

route::get('/user/create', 'UserController@create');

route::get('/user/{name}', 'Usercontroller@showname');

route::get('/user/{name}/{age}', 'UserController@showNameAndAge');
