<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('supplier','CustomAuthController@supplier')->middleware('auth:supplier')->name('supplier');
Route::get('Admin','CustomAuthController@Admin')->name('Admin')->middleware('auth:admins');

Route::get('Admin.login','CustomAuthController@AdminLogin')->name('Admin.login');
Route::get('supplier.login','CustomAuthController@supplierLogin')->name('supplier.login');

Route::post('Check/Admin','CustomAuthController@checkAdmin')->name('Check/Admin');
Route::post('Check/Supplier','CustomAuthController@checkSupplier')->name('Check/Supplier');

Route::resource('supplierCRUD','supplierController');
