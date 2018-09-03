<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PessoaContacto extends Model
{

    use Notifiable;

    protected $table = 'pessoa_contactos';

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');

    }
}
