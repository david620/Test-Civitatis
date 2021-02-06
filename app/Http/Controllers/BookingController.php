<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
    	dd($request->all());
    }
}
