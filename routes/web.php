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

Route::get('/', 'ResponsableController@index');
Route::resource('Responsable', 'ResponsableController');

Route::get('/', 'TramiteController@index');
Route::resource('Tramite', 'TramiteController');
/*
Route::get('Tramite/index/{id}', 'TramiteController@index')->name('alumno_nota');
/*
Route::get('Responsable/editar/{id}', 'ResponsableController@show')->name('Responsable_editar');
Route::post('Responsable/editar/{id}', 'ResponsableController@update');

Route::get('Responsable/eliminar/{id}', 'ResponsableController@destroy')->name('Responsable_eliminar');

Route::post('/Responsable/nuevo', 'ResponsableController@store')->name('nuevo_Responsable');
		
		Route::get('/Responsable/nuevo', function () {
		    return view('/Responsable/nuevo');
		});
		*/
