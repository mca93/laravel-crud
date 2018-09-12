<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGrauDeObrigatoriedadeToEmpresaEmNomeIndividualDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresa_em_nome_individual_docs', function (Blueprint $table) {
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
        Schema::table('empresa_em_nome_individual_docs', function (Blueprint $table) {
            //
        });
    }
}
