<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaInstituicoesDoEstadoDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicos_do_estado_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituicos_do_estado_docs', function (Blueprint $table) {
            
        });
    }
}
