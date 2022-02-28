<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombustivelFontesMoveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustivel_fontes_moveis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_combustivel_id')
                ->constrained('tipo_combustivel_fontes_moveis');
            $table->string('combustivel');
            $table->string('unidade');
            $table->float('poder_calorifico_inferior', 6,3);
            $table->float('densidade', 6,3);
            $table->string('referencia');

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
        Schema::dropIfExists('');
    }
}
