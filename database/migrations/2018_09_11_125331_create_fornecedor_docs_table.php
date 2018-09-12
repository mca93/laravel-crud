<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->unique();
            $table->string('extensao');
            $table->string('tamanho');
            $table->integer('tipofornecedor_id')->unsigned();
            $table->integer('fornecedor_id')->unsigned();
            $table->string('mime')->default('application/pdf');
            $table->timestamps();

            $table->foreign('tipofornecedor_id')->references('id')->on('tipo_fornecedors');           
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_docs');
    }
}
