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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function () {

    Route::get('claims/create', 'ClaimsController@create')->name('claim.create');
    Route::post('/claims/store', 'ClaimsController@store')->name('claim.store');
    Route::get('/admin/claims', 'ClaimsController@index')->name('claims.index');
    Route::get('/claims/response', 'ClaimsController@response')->name('claim.response');



    Route::get('/admin/claims/{claim}/edit', 'ClaimsController@edit')->name('claim.edit');
    Route::patch('/admin/claims/{claim}/update', 'ClaimsController@update')->name('claim.update');

});
