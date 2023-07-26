<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->timestamp('orario_di_partenza');
            $table->timestamp('orario_di_arrivo');
            $table->smallInteger('codice_treno');
            $table->smallInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->date('data_partenza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
