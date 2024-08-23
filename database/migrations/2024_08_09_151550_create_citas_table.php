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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
			$table->date('fecha_cita');
			$table->time('hora_cita');
			$table->float('valor_cita', 18, 2);
			$table->enum('tipo_cita',[0,1])->default(0);
			$table->enum('estado',[0,1,2,3])->default(0);			
			$table->unsignedBigInteger('propietario_id');
			$table->unsignedBigInteger('mascota_id');
			$table->unsignedBigInteger('user_id');			
			$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('propietario_id')->references('id')->on('propietarios');
            $table->foreign('mascota_id')->references('id')->on('mascotas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
