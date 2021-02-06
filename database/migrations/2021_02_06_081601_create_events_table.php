<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->comment('Identificador numérico'); // Identificador numérico
            $table->string('title', 64)->comment('Título (hasta 64 caracteres)'); //  Título (hasta 64 caracteres)
            $table->string('description', 1000)->comment('Descripción (1000 caracteres)'); //  Descripción (1000 caracteres)

            $table->date('init_avaibility_date')->comment('Inicio disponibilidad'); //  Inicio disponibilidad
            $table->date('end_avaibility_date')->comment('Fin disponibilidad'); //  Fin disponibilidad

            $table->double('price')->comment('Precio por persona'); //  Precio por persona
            $table->integer('trending')->comment('Indicador de popularidad (numérico, cuanto más alto, más popular)'); //  Indicador de popularidad (numérico, cuanto más alto, más popular)

            $table->timestamps(); //  Fechas creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
