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
//dd('aca');
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/empresa', 'Adm\EmpresaController@index')->name('empresa');

Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function() {
Route::get('/empresa', 'Adm\EmpresaController@create')->name('empresacreate');
Route::post('/empresastore', 'Adm\EmpresaController@store')->name('empresastore');
Route::get('/{id}/empresaedit', 'Adm\EmpresaController@edit')->name('empresaedit');
Route::get('/empresaindex', 'Adm\EmpresaController@index')->name('empresaindex');
Route::get('/{id}//empresadelete', 'Adm\EmpresaController@destroy')->name('empresadelete');

Route::get('/aplicaciones', 'Adm\AplicacionesController@create')->name('aplicacion');
Route::post('/aplistore', 'Adm\AplicacionesController@store')->name('aplistore');
Route::get('/{id}/apliedit', 'Adm\AplicacionesController@edit')->name('apliedit');
Route::get('/apliindex', 'Adm\AplicacionesController@index')->name('apliindex');
Route::get('/{id}//aplidelete', 'Adm\AplicacionesController@destroy')->name('aplidelete');


Route::get('/trabajosrealiz', 'Adm\TrabajosRealizController@create')->name('trabajosrealiz');
Route::post('/trabajosrealizadosstore','Adm\TrabajosRealizController@store')->name('trastore');
Route::get('/{id}/trabajosrealizedit', 'Adm\TrabajosRealizController@edit')->name('traedit') ;
Route::get('/trabajosrealizindex', 'Adm\TrabajosRealizController@index')->name('traindex') ;
Route::get('/{id}//trabajosrealizdelete', 'Adm\TrabajosRealizController@destroy')->name('tradelete') ;

   
Route::get('/contacto', 'Adm\ContactoController@create')->name('contacto') ;
Route::post('/contactostore', 'Adm\ContactoController@store')->name('contactostore') ;
Route::get('/{id}/contactoedit', 'Adm\ContactoController@edit')->name('contactoedit') ;
Route::get('/contactoindex', 'Adm\ContactoController@index')->name('contactoindex') ;
Route::get('/{id}//contactodelete', 'Adm\ContactoController@destroy')->name('contactodelete') ;

Route::get('/baner', 'Adm\BanerController@create')->name('baner') ;
Route::post('/banerstore', 'Adm\BanerController@store')->name('banerstore') ;

Route::get('/home', 'HomeController@index')->name('home');

//////Panel /////
Route::resource('panel', 'Adm\HomeController');

});
Auth::routes();