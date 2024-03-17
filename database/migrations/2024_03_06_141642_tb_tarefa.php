<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbTarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tarefa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo_da_atividade');
            $table->string('prioridade');
            $table->string('data_de_entrega');
            $table->string('horario_da_entrega');
            $table->string('quem_vai_executar_a_tarefa');
            $table->string('descricao_da_atividade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
