<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesContactoTable extends Migration
{
    public function up()
    {
        Schema::create('mensajes_contacto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->text('mensaje');
            $table->boolean('estado')->default(true); // activo por defecto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensajes_contacto');
    }
}
