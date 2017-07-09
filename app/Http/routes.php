<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// CRUD
//Route::get('contents/{id}', 'ContentsController@show')->name('contents.show');;
//Route::post('contents', 'ContentsController@store');
//Route::put('contents/{id}', 'ContentsController@update');
//Route::delete('contents/{id}', 'ContentsController@destroy');

// index: showの補助ページ
//Route::get('contents', 'ContentsController@index');

// create: 新規作成用のフォームページ
//Route::get('contents/create', 'ContentsController@create');

// edit: 更新用のフォームページ
//Route::get('contents/{id}/edit', 'ContentsController@edit');

//resource
Route::resource('contents', 'ContentsController');

Route::get('/', 'ContentsController@index');

