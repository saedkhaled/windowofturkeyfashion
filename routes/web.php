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
Route::get('/products/{category}/{number}','ProductController@index')->name('products');
Route::get('/products/{id}','ProductController@show')->name('product.show');

Route::get('/', function(){
    return view ('drop');
});

//Route::group(['prefix'=>'Categories'],function(){
//    Route::get('/takim', function(){
//        return view ('welcome');
//    })->name('takim');
//
//    Route::get('/ustGiyim', function(){
//        return view ('Ustgiyim');
//    })->name('ust');
//
//    Route::get('/altGiyim', function(){
//        return view ('Altgiyim');
//    })->name('alt');
//});
