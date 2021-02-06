<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'A New Hope',
            'description' => 'A New Hope',
            'init_avaibility_date' => '2021-02-06',
            'end_avaibility_date' => '2021-02-08',
            'price' => '10',
            'trending' => '12'
        ]);
    }
}
