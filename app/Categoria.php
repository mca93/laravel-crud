<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    
    public function fornecedores(){
        return $this->hasMany('App\Fornecedor');

    }
}
