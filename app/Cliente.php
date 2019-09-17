<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'cliente';// (framework) laravel se conecta com a tabela.
    protected $primaryKey = 'codcli';


}
