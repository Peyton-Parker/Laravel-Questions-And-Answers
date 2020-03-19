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

Route::get('/', 'WelcomeController@index')->name('welcome.index');
Route::post('/', 'WelcomeController@store')->name('welcome.store');

//Route::get('/', 'WelcomeController@index');
//Route::post('/questions', 'QuestionsController@store');
Route::get('/questions/{id}', 'QuestionsController@show')->name('questions.show');