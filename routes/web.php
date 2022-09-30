<?php

use App\Product;
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

Route::get('/', 'ProductController@productlist')->name('home');

Route::get('/pagina-1', function() {
    return view('pageone');
})->name('pagina-1');
Route::get('/pagina-2', function() {
    return view('pagetwo');
})->name('pagina-2');

