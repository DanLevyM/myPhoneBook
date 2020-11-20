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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ===================================
// ----------------- USERS -----
// ===================================
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:edit-users')->group(function() {
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::patch('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('user/{user}', 'UsersController@destroy')->name('users.destroy');
    Route::get('users/edit/{user}', 'UsersController@edit')->name('users.edit');
});

// ===================================
// ----------------- ENTREPRISES -----
// ===================================
// ---- ADMIN
Route::namespace('App\Http\Controllers\Enterprise')->prefix('enterprises')->name('enterprises.')->middleware('can:delete-users')->group(function() {
    Route::delete('/delete/{id}', 'EnterprisesController@destroy')->name('destroy');
});

// ---- MANAGER
Route::namespace('App\Http\Controllers\Enterprise')->prefix('enterprises')->name('enterprises.')->middleware('can:edit-users')->group(function() {
    Route::get('/', 'EnterprisesController@index')->name('index');
    Route::post('/', 'EnterprisesController@create')->name('create');
    Route::get('/create', 'EnterprisesController@show_form')->name('show_form');
    Route::get('/edit/{id}', 'EnterprisesController@edit')->name('edit');
    Route::patch('/update/{id}', 'EnterprisesController@update')->name('update');
});

// ---- USER
Route::namespace('App\Http\Controllers\Enterprise')->prefix('enterprises')->name('enterprises.')->middleware('can:see-users')->group(function() {
    Route::get('/{id}', 'EnterprisesController@enterprise_details')->name('details');
});

// ===================================
// -------------- COLLABORATEURS -----
// ===================================
// ---- ADMIN
Route::namespace('App\Http\Controllers\Collaborateur')->prefix('collaborateurs')->name('collaborateurs.')->middleware('can:delete-users')->group(function() {
    Route::delete('/delete/{id}', 'CollaborateursController@destroy')->name('destroy');
});

// ---- MANAGER
Route::namespace('App\Http\Controllers\Collaborateur')->prefix('collaborateurs')->name('collaborateurs.')->middleware('can:edit-users')->group(function() {
    Route::get('/', 'CollaborateursController@index')->name('index');
    Route::post('/', 'CollaborateursController@create')->name('create');
    Route::get('/create', 'CollaborateursController@show_form')->name('show_form');
});

// ---- USER
