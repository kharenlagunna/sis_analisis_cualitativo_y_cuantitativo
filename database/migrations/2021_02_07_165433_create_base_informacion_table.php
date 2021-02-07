<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    
    {
        Schema::create('base_informacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_base', 30);
            $table->text('descripcion_base');
            $table->string('sector_industri_base');
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
        Schema::dropIfExists('base_informacion');
    }
}
