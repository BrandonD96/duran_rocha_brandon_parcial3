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
        Schema::create('codigo_postales', function (Blueprint $table) {
            $table->Id();
            $table->integer('codigo');
            $table->text('asentamiento');
            $table->text('tipo_asenta');
            $table->text('municipio');
            $table->text('estado');
            $table->text('ciudad');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
