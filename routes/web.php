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

// Route::get('/hidepok/maps', function(){
//   return view('hidepok/maps');
// } );
Route::get('/maps', 'MapsController@maps');
// Route::get('/hidepok/maps', 'MapsController@maps2');
Route::get('/blog', 'BlogController@show');
Route::get('/blog/{id_blog}', 'BlogController@show2');
// Route::get('/hidepok/blog', function(){
//   return view('hidepok/blog');
// } );
Route::get('/event', function(){
  return view('event');
} );
