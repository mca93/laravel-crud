<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{

    protected $table = 'pais';

    public function fornecedores(){
        return $this->hasMany('App\Fornecedor');

    }
}
