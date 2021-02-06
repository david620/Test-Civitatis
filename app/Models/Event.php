<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = ['title', 'description', 'init_avaibility_date', 'end_avaibility_date', 'price', 'trending']; 
    public $timestamps = true;

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    public function totalPrice($price, $quantity)
    {
        return $price * $quantity;
    }

}
