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

// Ajax Actividades//	
	Route::post('/ajax-events-list', array('as' => 'ajax_events', 'uses' => 'FrontController@ajax_events'));
	Route::get('/ajax-event/{id}', array('as' => 'ajax_event', 'uses' => 'FrontController@ajax_event'));

// Ajax Actividades//	

// Guardar Reserva de Actividades//
	Route::post('/booking-store', array('as' => 'booking_store', 'uses' => 'BookingController@store'));
// Guardar Reserva de Actividades//