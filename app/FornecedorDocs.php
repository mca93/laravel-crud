<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FornecedorDocs extends Model
{
    public function fornecedor()
  {
    return $this->belongsTo('App\Fornecedor');
  }

  public function tipoFornecedor()
  {
    return $this->belongsTo('App\TipoFornecedor');
  }
}
