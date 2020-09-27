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
Route::get('contact', 'HomeController@contact');


Route::prefix('/search')->group(function (){
    Route::get('/', 'HistoryController@search');
    Route::get('/{title}', 'HistoryController@SearchWithTitle');
});

Route::prefix('/history')->group(function (){
    Route::get('/', 'HistoryController@index');

});
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', ['HomeController','index'])->name('dashboard');
