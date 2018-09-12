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

        $tipo_de_empresas = json_encode(array_map(function($x) {
            return $x['designacao'];
        },$this->tipo_fornecedores()->toArray()));

        $tipo_de_empresas_count = json_encode(array_map(function($x) {
            return $x['tipo_fornecedores_count'];
        }, $this->tipo_fornecedores()->toArray()));

        return view('home')->withPaises($paises)
                ->withFornecedores($fornecedores)->withTiposfornecedores($tiposfornecedores)
                ->withCategorias($categorias)
                ->with('tipo_de_empresas',$tipo_de_empresas)
                ->with('tipo_de_empresas_count', $tipo_de_empresas_count);
    }

    private function tipo_fornecedores(){

        return TipoFornecedor::select(DB::raw('count(fornecedores.tipofornecedor_id) as tipo_fornecedores_count, designacao'))
        ->leftjoin('fornecedores', 'tipo_fornecedors.id','=','fornecedores.tipofornecedor_id')
        ->groupBy('designacao')
        ->get();
    }
   
}
