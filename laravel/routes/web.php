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

//Route::get('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users.index');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::patch('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('user/{user}', 'UsersController@destroy')->name('users.destroy');
    Route::get('users/edit/{user}', 'UsersController@edit')->name('users.edit');
    //Route::get('users', 'UsersController@destroy')->name('users.destroy');
});