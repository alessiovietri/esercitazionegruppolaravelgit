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


Route::get('/', function() {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');

});



// TEST
Route::get('/pagina-2', function() {
    return view('pagetwo');
})->name('pagina-2');

Route::get('/pagina-4', function() {
    return view('provaPagina4');
})->name('pagina-4');

Route::get('/prove3', 'ProveController@paginaProve')->name('prove-pagina-3');
