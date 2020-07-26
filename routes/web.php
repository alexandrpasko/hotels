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

Route::get('/', 'HotelsController@home');
Route::get('/hotels', 'HotelsController@index');
Route::get('/hotels/{id}', 'HotelsController@show');
Route::get('/about', 'HotelsController@about');

Route::get('/contact', function () {
	$title = 'Contact Us';
    return view('contact', compact('title'));
});

Route::get('/contact/{hotel}', 'HotelsController@contact');

// these two created by ui (auth)
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// middlewares to ensure the user is authenticated and has admin rights
// auth is created by bootstrap; admin is added manually (php artisan make:middleware RequireAdmin)
Route::middleware(['auth','admin'])->group(function(){

	// home page for admin (list view)
	Route::get('/admin', 'Admin\HotelsController@index');

	// add a new record to database
	Route::get('/admin/hotels/create', 'Admin\HotelsController@create');
	Route::post('/admin/hotels/create', 'Admin\HotelsController@store'); // post request

	// delete a record from database
	Route::delete('/admin/hotels', 'Admin\HotelsController@destroy'); //delete request

	// exit an existion record
	Route::get('/admin/hotels/{id}/edit', 'Admin\HotelsController@edit');
	Route::put('/admin', 'Admin\HotelsController@update'); // put method	

});
