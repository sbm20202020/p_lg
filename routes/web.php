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
Route::get('/','IndexController@index')->name('index');
Route::get('add-to-cart/{id}', 'ItemController@addToCart');
Route::get('panier', 'ItemController@panier')->name('panier');
Route::resource('db', 'ContactController');
Route::resource('db_P', 'PartenaireController');
/*Route::get('/', function(){

});*/



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/partenaire', 'PartenaireController@index')->name('partenaire');

