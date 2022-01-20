<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('production_id');
            $table->foreign('production_id')->references('id')->on('productions');
            $table->string("nombre_completo");
            $table->string("marca");
            $table->string("color");
            $table->string("placa");
            $table->float("tara",8,2);
            $table->float("peso_bruto",8,2);
            $table->string("observaciones");
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
        Schema::dropIfExists('details');
    }
}
