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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('nombre_representante')->nullable();
            $table->string('numero_documento')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo')->nullable();
            $table->string('web')->nullable();
            $table->enum('prefijo',[0,1,2,3])->default(0)->nullable();

            //Foraneas
            $table->unsignedBigInteger('tipo_identificacion_id');
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('municipio_id');

            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificacions');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
