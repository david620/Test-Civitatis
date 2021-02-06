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

// Landing Page de Reservas//
	Route::get('/', array('as' => 'home', 'uses' => 'FrontController@index'));
// Landing Page de Reservas//

// Ajax Fechas Actividades//	
	Route::get('/ajax-dates/', array('as' => 'ajax_dates', 'uses' => 'FrontController@ajax_dates'));
// Ajax Fechas Actividades//	

// Guardar Reserva de Actividades//
	Route::post('/event-store', array('as' => 'event_store', 'uses' => 'EventController@store'));
// Guardar Reserva de Actividades//