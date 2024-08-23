<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_nacimiento')->nullable();
			$table->enum('chip',[0,1])->default(0)->nullable();
            $table->string('numero_chip')->nullable();
            $table->string('nombre')->nullable();
            $table->string('edad')->nullable();
			$table->enum('sexo',[0,1])->default(0)->nullable();			
            //Foraneas
            $table->unsignedBigInteger('especie_id');
            $table->unsignedBigInteger('raza_id');
            $table->unsignedBigInteger('pelaje_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('propietario_id');
            $table->foreign('especie_id')->references('id')->on('especies');
            $table->foreign('raza_id')->references('id')->on('razas');
            $table->foreign('pelaje_id')->references('id')->on('pelajes');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('propietario_id')->references('id')->on('propietarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
