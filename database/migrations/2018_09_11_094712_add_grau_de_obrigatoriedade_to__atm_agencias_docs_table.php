<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGrauDeObrigatoriedadeToAtmAgenciasDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atm_agencias_docs', function (Blueprint $table) {
            $table->integer('grau_de_obrigatoriedade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atm_agencias_docs', function (Blueprint $table) {
            //
        });
    }
}
