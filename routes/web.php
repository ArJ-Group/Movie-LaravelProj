<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;

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


Auth::routes();

Route::get('/home', [HomeController::class, 'home']);
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index');

Route::resource('member', 'MemberController');
Route::resource('user', 'UserController');

Route::resource('book', 'BookController');
Route::get('/format_buku', 'BookController@format');
Route::post('/import_buku', 'BookController@import');

Route::resource('transaction', 'TransactionController');
Route::get('/report/trs', 'ReportController@transaksi');
Route::get('/report/trs/pdf', 'ReportController@transaksiPdf');
Route::get('/report/trs/excel', 'ReportController@transaksiExcel');

Route::get('/report/buku', 'ReportController@buku');
Route::get('/report/buku/pdf', 'ReportController@bukuPdf');
Route::get('/report/buku/excel', 'ReportController@bukuExcel');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
