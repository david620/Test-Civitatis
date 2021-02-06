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
        Event::unguard();

        Event::create([
            'title' => 'Tour Camp Nou',
            'description' => 'Tour completo al Camp Nou, con acceso a la cancha y vestidores.',
            'init_avaibility_date' => '2021-02-06',
            'end_avaibility_date' => '2021-02-08',
            'price' => '25',
            'trending' => '2'
        ]);

        Event::create([
            'title' => 'Tour Santiago Bernabeu',
            'description' => 'Tour completo al Santiago Bernabeu, con acceso a la cancha y vestidores.',
            'init_avaibility_date' => '2021-02-08',
            'end_avaibility_date' => '2021-02-10',
            'price' => '15',
            'trending' => '1'
        ]);

        Event::create([
            'title' => 'Visita Tibidabo',
            'description' => 'Visita guiada al Tibidabo, con acceso al parque y al santuario.',
            'init_avaibility_date' => '2021-02-09',
            'end_avaibility_date' => '2021-02-11',
            'price' => '35',
            'trending' => '3'
        ]);

        Event::create([
            'title' => 'Visita Museo Reina Victoria',
            'description' => 'Visita Museo Reina Victoria.',
            'init_avaibility_date' => '2021-02-09',
            'end_avaibility_date' => '2021-02-11',
            'price' => '5',
            'trending' => '10'
        ]);

        Event::create([
            'title' => 'Tour Park Güell',
            'description' => 'Visita Park Güell',
            'init_avaibility_date' => '2021-02-09',
            'end_avaibility_date' => '2021-02-11',
            'price' => '6',
            'trending' => '11'
        ]);


        Event::create([
            'title' => 'Visita al Templo Debod',
            'description' => 'Visita guiada al Templo Debod',
            'init_avaibility_date' => '2021-02-09',
            'end_avaibility_date' => '2021-02-11',
            'price' => '13',
            'trending' => '15'
        ]);

    }
}
