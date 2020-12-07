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


Route::get('/', 'SeasonController@index')->name('home');

// Route::get('/seasons/{seasons}', 'SeasonController@destroy')->name('seasons.destroy');

Auth::routes();

Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        // Route::get('/', 'HomeController@index')->name('home');
        Route::get('/seasons', 'SeasonController@index');
        Route::resource('/seasons', 'SeasonController');
        Route::resource('/dishes', 'DishController');
});

Route::get('/home', 'HomeController@index');

Route::resource('seasons', 'SeasonController');

Route::resource('dishes', 'DishController');

Route::resource('ingredients', 'IngredientController');