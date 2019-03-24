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


Route::get('kategori',function(){
    return "halaman kategori";
  
  } );

  Route::get('layout', function(){
    return view('Layout.master');
  }

);

Route::get('/kategori/tambah','kategoriController@tambah');
Route::post('/kategori/abcd','kategoriController@abcd');
Route::get('/kategori/editt/{id}','kategoriController@editt');
Route::post('/kategori/updatee','kategoriController@updatee');
Route::get('/kategori/hapuss/{id}','kategoriController@hapuss');

// Route::get('layout', function(){
//   return view('Layout.sidebar');
// });
Route::get('layout', function(){
  return view('Layout.master');
});

Route::get('template', function(){
  return view('dashboard.content');
});

Route::get('table', function(){
  return view('kategori.index');
});
  

Route::resource('kategori','kategoriController');

/*Route::resource('kategori','kategoriController')->only(['index','show']);*/