<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_habilidades', function (Blueprint $table) {
            $table->id();
            $table->string('perfil');
            $table->string('desicion');
            $table->string('riesgo');
            $table->string('equipo');
            $table->string('persistencia');
            $table->string('liderazgo');
            $table->string('emocional');
            $table->string('comunicacion');
            $table->string('compromiso');

            $table->integer('vperfil');
            $table->integer('vdesicion');
            $table->integer('vriesgo');
            $table->integer('vequipo');
            $table->integer('vpersistencia');
            $table->integer('vliderazgo');
            $table->integer('vemocional');
            $table->integer('vcomunicacion');
            $table->integer('vcompromiso');
            $table->integer('nombre');
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
        Schema::dropIfExists('historico_habilidades');
    }
}
