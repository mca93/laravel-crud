<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoFornecedor extends Model
{
    protected $table = 'tipo_fornecedors';

    public function fornecedores(){
        return $this->hasMany('App\Fornecedor');

    }
}
