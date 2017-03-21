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


Route::get('/questionairs' , 'QuestionsController@index');
Route::get('/questionairs/create' , 'QuestionsController@show');
Route::get('/questionairs/{question}/add' , 'QuestionsController@formshow');
Route::post('/store' , 'QuestionsController@store');
Route::post('/text/{question}' , 'AddQuestionsController@store');
Route::post('/multiple/{question}' , 'AddMultiplesController@store');
Route::post('/multiplechoice/{question}' , 'AddMultipleChecksController@store');
Route::get('/edit/{id}' , 'QuestionsController@edit');
Route::patch('/update/{id}/edit' , 'QuestionsController@update');
Route::get('/delete/{id}' , 'QuestionsController@delete');