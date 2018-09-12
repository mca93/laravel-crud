<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoFornecedorsIdToEmpresaInstituicoesDoEstadoDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instituicos_do_estado_docs', function (Blueprint $table) {
            $table->integer('tipofornecedor_id')->after('grau_de_obrigatoriedade')->unsigned()->nullable();
            $table->foreign('tipofornecedor_id')->references('id')->on('tipo_fornecedors');
        
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
