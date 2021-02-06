<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
	    return view('welcome', compact('events'));
    }

	function ajax_events(Request $request){
		$date = json_decode($request->datess);
		$people = json_decode($request->people);
		$events = Event::whereRaw('? between init_avaibility_date and end_avaibility_date', [$date])->orderBy('trending', 'ASC')->get();
		if($events) return view('events', compact('events', 'people', 'date')); 
	}

}
