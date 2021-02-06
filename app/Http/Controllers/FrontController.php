<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
    	$events = Event::all();
	    return view('welcome', compact('events'));
    }


	function ajax_dates(Request $request){
		$event_id = json_decode($request->event);
		$event = Event::findOrFail($event_id);
        return view('dates', compact('event'));
	}

}
