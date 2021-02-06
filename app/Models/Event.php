<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = ['title', 'description', 'init_avaibility_date', 'end_avaibility_date', 'price', 'trending', 'related_events']; 
    public $timestamps = true;

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    //Calcula el precio total de una actividad
    public function totalPrice($price, $quantity)
    {
        return $price * $quantity;
    }

    //Muestra las actividades relacionadas filtrando por la fecha
    public function relatedEvents($date)
    {        
        $events_ids = explode(",", $this->related_events);
        $events_names = [];
        foreach ($events_ids as $id) {
            $event = $this::findOrFail($id);

            if (($date >= $event->init_avaibility_date) && ($date <= $event->end_avaibility_date)){
                array_push($events_names, $event->title);                
                return $events_names;
            }
        }
    }

}
