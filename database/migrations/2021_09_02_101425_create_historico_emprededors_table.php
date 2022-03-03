<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoEmprededorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_emprededors', function (Blueprint $table) {
            $table->id();
            $table->string('sh');
            $table->string('ss');
            $table->string('sr');
            $table->string('rss');
            $table->string('rsh');
            $table->string('rsr');
            $table->integer('vrss');
            $table->integer('vrsh');
            $table->integer('vrsr');
            $table->integer('vtotal');
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
        Schema::dropIfExists('historico_emprededors');
    }
}
