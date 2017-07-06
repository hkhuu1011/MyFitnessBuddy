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
    $title = 'My Fitness Buddy';
    return view('welcome')->with('title', $title );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/meals', 'MealsController@meals');
//Route::get('/meals/create', 'MealsController@mealsCreate');

Route::get('/users/{id}', function($id) {
    return $id;
});

Route::resource('posts', 'PostsController');