<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fornecedor;
use App\Pais;
use App\TipoFornecedor;
use App\Categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        $tiposfornecedores = TipoFornecedor::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
    
        return view('home')->withPaises($paises)
                ->withFornecedores($fornecedores)->withTiposfornecedores($tiposfornecedores)
                ->withCategorias($categorias);
    }

    
   
}
