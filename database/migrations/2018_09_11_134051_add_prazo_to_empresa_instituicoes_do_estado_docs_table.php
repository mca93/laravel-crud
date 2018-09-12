<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrazoToEmpresaInstituicoesDoEstadoDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instituicos_do_estado_docs', function (Blueprint $table) {
            $table->string('prazo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instituicos_do_estado_docs', function (Blueprint $table) {
            //
        });
    }
}
