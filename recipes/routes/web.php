<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('recipes.index');

Auth::routes();

Route::get('/search', 'App\Http\Controllers\HomeController@search')->name('recipes.search');
Route::post('/search', 'App\Http\Controllers\HomeController@search');

Route::get('/sort/{sort}', 'App\Http\Controllers\HomeController@sort')->name('recipes.sort');
Route::get('/like/{recipe}', 'App\Http\Controllers\RecipeController@like')->name('recipes.like');
Route::post('/like/{recipe}', 'App\Http\Controllers\RecipeController@like');


Route::get('/recipes', 'App\Http\Controllers\RecipeController@list')->name('recipes.list');

Route::get('/recipes/create', 'App\Http\Controllers\RecipeController@create')->name('recipes.add');
Route::post('/recipes/create', 'App\Http\Controllers\RecipeController@store');

Route::get('/recipes/{recipe}', 'App\Http\Controllers\RecipeController@edit')->name('recipes.edit');
Route::post('/recipes/{recipe}', 'App\Http\Controllers\RecipeController@update');

Route::delete('/recipes/{recipe}', 'App\Http\Controllers\RecipeController@destroy');

Route::get('/show/{recipe}', 'App\Http\Controllers\HomeController@show')->name('recipes.show');




