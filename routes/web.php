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


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/email', 'PagesController@email');
Route::get('/courses', 'CoursesController@index');

//students route
//Route::resource('/students', 'StudentController');
Route::get('/students', 'StudentController@index');

//assignments routes
Route::resource('/assignments', 'assigmentcontroller');
// Route::get('/assignments', 'assigmentcontroller@index');
// Route::get('/assignments/', 'assigmentController@index');
// Route::get('/assignments/create', 'assigmentController@create');
// Route::post('/assignments/', 'assigmentController@store');
// Route::delete('assignments/{assignment}', 'assigmentController@destroy');
// Route::get('/assignments/{assignment}/edit', 'assigmentController@edit');
// Route::get('/assignments/{assignment}', 'assigmentController@show');
// Route::patch('/assignments/{assignment}', 'assigmentController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
