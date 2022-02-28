<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombustivelFonteMovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustivel_fonte_movel', function (Blueprint $table) {
            $table->id();
            $table->string('combustivel');
            $table->string('unidade');
            $table->float('poder_calorifico_inferior', 6,3);
            $table->float('densidade', 6,3);
            $table->string('referencia');
            $table->foreignId('tipo_combustivel_id')
                ->constrained('tipo_combustivel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combustivel_fonte_movel');
    }
}
