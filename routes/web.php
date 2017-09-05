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

Route::get('/data', function () {
    return view('opendata/data');
});
Route::get('/detail', function () {
    return view('opendata/detail');
});
Route::get('/organisasi', function () {
    return view('opendata/organisasi');
});
Route::get('/tentang', function () {
    return view('opendata/tentang');
});
Route::get('/topik', function () {
    return view('opendata/topik');
});

Route::post('/tempatibadah', 'SearchController@searchti');


Route::get('/topik/pendidikan', function(){
  return view('topik/pendidikan');
} );
Route::get('/topik/kesehatan', function(){
  return view('topik/kesehatan');
} );
Route::get('/topik/perekonomian', function(){
  return view('topik/perekonomian');
} );
Route::get('/topik/fasilitasumum', function(){
  return view('topik/fasilitasumum');
} );
Route::get('/topik/transportasi', function(){
  return view('topik/transportasi');
} );
Route::get('/topik/sosial', function(){
  return view('topik/sosial');
} );
Route::get('/topik/pariwisata', function(){
  return view('topik/pariwisata');
} );
Route::get('/topik/olahraga', function(){
  return view('topik/olahraga');
} );
Route::get('/topik/fasilitas', function(){
  return view('topik/fasilitas');
} );


Route::get('/detail/RumahSakit', function(){
  return view('detail/detRS');
} );
Route::get('/detail/Apotek', function(){
  return view('detail/detApotek');
} );
Route::get('/detail/Klinik', function(){
  return view('detail/detKlinik');
} );
Route::get('/detail/Perpustakaan', function(){
  return view('detail/detPerpus');
} );
Route::get('/detail/Mall', function(){
  return view('detail/detMall');
} );
Route::get('/detail/Pasar', function(){
  return view('detail/detPasar');
} );
Route::get('/detail/Supermarket', function(){
  return view('detail/detSupermarket');
} );

Route::get('/detail/PantiAsuhan', function(){
  return view('detail/pantiasuhan');
} );

Route::get('/detail/Kuliner', function(){
  return view('detail/kuliner');
} );

Route::get('/detail/Wisata', function(){
  return view('detail/wisata');
} );

Route::get('/detail/Olahraga', function(){
  return view('detail/olahraga1');
} );

Route::get('/detail/Angkot', function(){
  return view('detail/angkot');
} );

Route::get('/detail/JasaPengiriman', function(){
  return view('detail/jasapengiriman');
} );

Route::get('/detail/TempatIbadah', function(){
  return view('detail/tempatibadah');
} );

Route::get('/detail/TPU', function(){
  return view('detail/tpu');
} );

Route::get('/detail/RTH', function(){
  return view('detail/rth');
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
