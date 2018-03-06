<?php
ini_set('xdebug.max_nesting_level', 300);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

/* Moje routes */
Route::get('/', "BlogController@index");
Route::get('/articles', "BlogController@index");
Route::get('/articles/{article}', "BlogController@show");

Route::get('/about', "PageController@about");
Route::get('/contact', "PageController@contact");
Route::post('/contact', "PageController@contact");
Route::get('/gallery', "PageController@gallery");


Route::get('/php', "BlogController@php");
Route::get('/laravel', "BlogController@laravel");
Route::get('/angular', "BlogController@angular");

Route::get('/hidden', "HiddenController@show");



/* voyager routes
email: admin@admin.com
password: password
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/* php artisan make:auth routes*/
Auth::routes();
// http://127.0.0.1:8000/login
// http://127.0.0.1:8000/register
// http://127.0.0.1:8000/home
Route::get('/home', 'BlogController@index')->name('home');
Route::get('/logout', 'BlogController@index');
