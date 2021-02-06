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

}
