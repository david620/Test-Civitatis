<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id')->comment('Identificador numérico'); // Identificador numérico
            $table->integer('event_id')->unsigned()->comment('Identificador numérico que referencia a la actividad'); // Identificador numérico que referencia a la actividad
            $table->foreign('event_id')->references('id')->on('events'); // Relación de clave foránea a la actividad.
            $table->integer('quantity')->comment('Cantidad de Personas'); // Cantidad de Personas
            $table->double('booking_price')->comment('Precio de la Reserva'); // Precio de la Reserva
            $table->date('booking_date')->comment('Fecha Reserva'); //  Fecha Reserva
            $table->date('event_date')->comment('Fecha Actividad'); //  Fecha Actividad
            $table->timestamps(); //Fechas creación y actualización del Objeto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
