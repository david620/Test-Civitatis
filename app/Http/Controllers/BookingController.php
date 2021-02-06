<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Booking;
use DB;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
		$this->validate($request, [
				'eventId'    => 'required',
				'totalPrice' => 'required',
				'people' => 'required',
				'eventDate' => 'required',
			]);

		$event = Event::findOrFail($request->eventId);

		DB::beginTransaction();
        try {
			$booking  = new Booking;
			$booking->event_id = $event->id;
			$booking->booking_price = $request->totalPrice;
			$booking->quantity = $request->people;
			$booking->event_date = $request->eventDate;
			$booking->booking_date = date('Y-m-d H:i:s');
			$booking->save();
    		DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error reservando Actividad.');   
        }
        return redirect()->back()->with('success', 'Actividad Reservada con Éxito.');   
    }
}
