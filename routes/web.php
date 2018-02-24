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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');
// Route::get('/posts', 'PostsController@index')->name('home');
// Route::get('/posts/create', 'PostsController@create');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

/*
* Flashcards
*/
Route::get('/', 'FlashcardsController@index'); // по умолчанию: показываем список
Route::get('/flashcards/{id}', 'FlashcardsController@show')->where(['id' => '[0-9]']);

Route::get('/flashcards/create', 'FlashcardsController@create');
Route::post('/flashcards/create', 'FlashcardsController@store');

Route::get('/flashcards/update/{id}', 'FlashcardsController@update')->where(['id' => '[0-9]']);
Route::post('/flashcards/update/{id}', 'FlashcardsController@update')->where(['id' => '[0-9]']);

Route::get('/flashcards/delete/{id}', 'FlashcardsController@delete')->where(['id' => '[0-9]']);
Route::get('/testdb', 'FlashcardsController@testRawQuery');

/*
* Categories
*/
Route::get('/categories', 'CategoriesController@list'); // categories list

