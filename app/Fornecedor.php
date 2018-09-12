<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome','tipo', 'localizacao','tipofornecedor_id', 'pais_id'];
    protected $table = 'fornecedores';

    public function tipofornecedor()
    {
        return $this->belongsTo('App\TipoFornecedor');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function pessoasContacto()
    {
        return $this->hasMany('App\PessoaContacto');
    }
    
    public function documentos(){
        return $this->hasMany('App\FornecedorDocs');
    }
}
