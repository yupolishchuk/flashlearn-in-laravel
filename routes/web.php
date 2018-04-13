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
* Home
*/
Route::get('/', 'HomeController@index'); //TODO  по умолчанию: показываем список категорий

/*
* Learn
*/

// TODO
// переписать например так: /learning/cat=10&card=15
// вынести эти методы из FlashcardsController в LearningController
// учеба: не нужно тянуть сразу все карты, переключаемся на следующую с перезагрузкой страницы
// Route::get('/flashcards/category/learn/{id}', 'FlashcardsController@learning')->where(['id' => '[0-9]']);
Route::get('/learn/{id}', 'LearnController@giveCard')->where(['id' => '[0-9]']);
Route::get('/flashcards/category/list/{id}', 'FlashcardsController@list')->where(['id' => '[0-9]']); // ajax response
Route::get('/learn/known/{id}', 'LearnController@updateCard')->where(['id' => '[0-9]']);

/*
* Flashcards CRUD
*/
Route::get('/flashcards/{id}', 'FlashcardsController@show')->where(['id' => '[0-9]']);
Route::get('/flashcards/create', 'FlashcardsController@create');
Route::post('/flashcards/create', 'FlashcardsController@store');

Route::get('/flashcards/update/{id}', 'FlashcardsController@update')->where(['id' => '[0-9]']);
Route::post('/flashcards/update/{id}', 'FlashcardsController@update')->where(['id' => '[0-9]']);

Route::get('/flashcards/delete/{id}', 'FlashcardsController@delete')->where(['id' => '[0-9]']);
Route::get('/testdb', 'FlashcardsController@testRawQuery');

/*
* Categories CRUD
*/
Route::get('/categories', 'CategoriesController@list'); // Show list of categories
Route::get('/categories/nestedlist', 'CategoriesController@nestedlist'); // Show nested template list of categories
Route::get('/categories/givenestedlist', 'CategoriesController@givenestedlist'); // give nested json for ajax request 
Route::get('/nestedsettest', 'NestedSetsTestController@index');

Route::get('/categories/create', 'CategoriesController@create');
