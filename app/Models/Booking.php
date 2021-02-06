<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $fillable = ['event_id', 'quantity', 'booking_price', 'booking_date', 'event_date']; 
    public $timestamps = true;


    public function booking()
    {
        return $this->belongsTo('App\Models\Event');
    }


}
