<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';// (framework)laravel se conecta com a tabela.
    protected $primaryKey = 'codpro';

}
