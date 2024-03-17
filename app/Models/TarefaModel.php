<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_tarefa';

    protected $fillable = [
        'titulo_da_atividade',
        'prioridade',
        'data_de_entrega',
        'horario_da_entrega',
        'quem_vai_executar_a_tarefa',
        'descricao_da_atividade'
    ];

}
