<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria'; //  (framework) laravel se conecta com a tabela.
    protected $primaryKey = 'codcat';
}
