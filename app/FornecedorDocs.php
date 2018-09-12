<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FornecedorDocs extends Model
{

  protected $table = 'fornecedor_docs';

    public function fornecedor()
  {
    return $this->belongsTo('App\Fornecedor');
  }

  public function tipofornecedor()
  {
    return $this->belongsTo('App\TipoFornecedor');
  }
}
