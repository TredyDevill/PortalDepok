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

Route::get('/opendata', function () {
    return view('opendata');
});
Route::get('/bencana', function(){
  return view('opendata/bencana');
} );
Route::get('/kependudukan', function(){
  return view('opendata/kependudukan');
} );
Route::get('/kesehatan', function(){
  return view('opendata/kesehatan');
} );
Route::get('/keuangan', function(){
  return view('opendata/keuangan');
} );
Route::get('/pariwisata', function(){
  return view('opendata/pariwisata');
} );
Route::get('/pekerjaan', function(){
  return view('opendata/pekerjaan');
} );
Route::get('/pendidikan', function(){
  return view('opendata/pendidikan');
} );
Route::get('/sosial', function(){
  return view('opendata/sosial');
} );

Route::get('/hidepok/maps', function(){
  return view('hidepok/maps');
} );
Route::get('/hidepok/blog', function(){
  return view('hidepok/blog');
} );
Route::get('/hidepok/event', function(){
  return view('hidepok/event');
} );
