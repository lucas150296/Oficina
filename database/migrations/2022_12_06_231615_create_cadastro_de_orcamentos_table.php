<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroDeOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_de_orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente', 100);
            $table->time('horaDoOrcamento');
            $table->date('dataOrcamento');
            $table->string('vendedor', 100);
            $table->text('descricao');
            $table->string('valorOrcado', 100)->nullable()->default('text');
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
        Schema::dropIfExists('cadastro_de_orcamentos');
    }
}
