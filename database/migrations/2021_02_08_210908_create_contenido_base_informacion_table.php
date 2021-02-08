<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidoBaseInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_base_informacion', function (Blueprint $table) {
            $table->id();
            $table->integer('llave_cruce');
            $table->text('campo_informacion');
            $table->string('grupo_categoria');
            $table->string('categoria_especifica');
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
        Schema::dropIfExists('contenido_base_informacion');
    }
}
