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

Route::view('/home','home');
Route::view('/','home');
Route::view('contact','contact');
Route::view('/list','list');
Route::view('add','add');
 


Route::get('list','employeeController@index');
Route::post('add','employeeController@store');

 
Route::get('profile/{id}','employeeController@show');//user Links to profile
Route::patch('profile/{id}','employeeController@update');//edit
Route::delete('profile/{id}','employeeController@destroy');//delete


Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
