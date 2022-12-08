<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroDeOrcamento extends Model
{
    protected $fillable = [ 'cliente', 'horaDoOrcamento', 'dataOrcamento', 'vendedor', 'descricao', 'valorOrcado' ];
}
