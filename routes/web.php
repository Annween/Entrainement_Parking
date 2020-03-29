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
Route::get('contact', 'ContactsController@create')->name('contact.create');
Route::post('contact', 'ContactsController@store')->name('contact.store');

Route::get('reservation', 'ReservationController@create')->name('reservation.create');
Route::post('reservation', 'ReservationController@store')->name('reservation.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/reservation', function () {
// return view('reservation');
//});

Route::get('/login_page', function () {
    return view('login_page');



});


//route pour les utilisateurs

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');


//MIDDLEWARE
Route::middleware('admin')->group(function (){
});


Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/user', function () {
        //
    });
});

Route::resource('users', 'UserController')->middleware('auth');









