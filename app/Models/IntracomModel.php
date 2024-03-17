<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntracomModel extends Model
{
    use HasFactory;

    protected $table = 'tb_intracom';

    protected $fillable = [
        'titulo_do_comunicado',
        'descricao_do_comunicado'
    ];
}
