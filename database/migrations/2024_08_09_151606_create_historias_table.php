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
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_historia');
			$table->time('hora_historia');
			$table->enum('esterilizado',[0,1])->default(0)->nullable();
			$table->integer('numero_partos')->nullable();
			$table->enum('vive_con_otros_animales',[0,1])->default(0)->nullable();
			$table->text('cuales_animales')->nullable();
			$table->text('dieta')->nullable();
			$table->text('enfermedades_previas')->nullable();
			$table->text('cirugias_previas')->nullable();
			$table->text('ultima_desparacitacion')->nullable();
			$table->text('tratamientos_recientes')->nullable();
			$table->text('esquema_vacunal')->nullable();
			$table->text('viajes_recientes')->nullable();
			$table->text('motivo_de_consulta')->nullable();
			$table->integer('condicion_corporal')->nullable();
			$table->float('temperatura', 18, 2);
			$table->float('fr', 18, 2);
			$table->float('fc', 18, 2);
			$table->float('trpc', 18, 2);
			$table->float('tllc', 18, 2);
			$table->float('mucosas', 18, 2);
			$table->float('peso', 18, 2);
			$table->float('pulso', 18, 2);
			$table->float('porcentaje_deshidratacion', 18, 2);
			$table->text('organos_de_los_sentidos')->nullable();
			$table->text('piel_y_pelaje')->nullable();
			$table->text('ganglios_linfaticos')->nullable();
			$table->text('sistema_digestivo')->nullable();
			$table->text('sistema_respiratorio')->nullable();
			$table->text('sistema_endocrino')->nullable();
			$table->text('sistema_musculo_esqueletico')->nullable();
			$table->text('sistema_nervioso')->nullable();
			$table->text('sistema_urinario')->nullable();
			$table->text('sistema_reproductivo')->nullable();
			$table->text('palpacion_rectal')->nullable();
			$table->text('otros')->nullable();
			$table->text('lista_de_problemas')->nullable();
			$table->text('lista_maestra')->nullable();
			$table->text('diagnosticos_diferenciales')->nullable();
			$table->date('fecha_resultado')->nullable();
			$table->string('examen')->nullable();
			$table->string('resultado')->nullable();
			$table->text('diagnosticos_presuntivos_justificado')->nullable();
			$table->text('diagnosticos_definitivo')->nullable();
			$table->text('plan_terapeutico')->nullable();
			$table->text('pronostico')->nullable();
			$table->text('observaciones')->nullable();
			
			$table->unsignedBigInteger('cita_id');
			$table->unsignedBigInteger('user_id');
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('cita_id')->references('id')->on('citas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
