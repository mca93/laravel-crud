<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Fornecedor;
use App\Pais;
use App\TipoFornecedor;
use App\Categoria;
use App\PessoaContacto;
use App\Helpers\Helpers;


class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        $tiposfornecedores = TipoFornecedor::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
    
        return view('kyv.index')->withPaises($paises)
                ->withFornecedores($fornecedores)->withTiposfornecedores($tiposfornecedores)
                ->withCategorias($categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $forncedor = new Fornecedor;
       $pais = Pais::find($request->input('pais_fornecedor'));
       $categoria = Categoria::find($request->input('categoria_fornecedor'));
       $tipofornecedor = TipoFornecedor::find($request->input('tipo_fornecedor'));

      
       $forncedor->nome = $request->input('nome');
       $forncedor->nuit = $request->input('nuit');
       $forncedor->email = $request->input('email_fornecedor');
       $forncedor->localizacao = $request->input('localizacao');
       $forncedor->telefone = $request->input('telefone_fornecedor');
       $forncedor->cidade = $request->input('cidade');
       $forncedor->numero = $request->input('numero');
       $forncedor->banco = $request->input('banco_fornecedor');
       $forncedor->praca = $request->input('praca_dobanco_dofofornecedor');
       $forncedor->conta = $request->input('conta_fornecedor');
       $forncedor->nib  = $request->input('nib_fornecedor');
       $forncedor->moeda = $request->input('moeda_conta'); 
       
       $forncedor->pais()->associate($pais);
       $forncedor->tipofornecedor()->associate($tipofornecedor);
       $forncedor->categoria()->associate($categoria);


       $forncedor->save();

        $pessoaContacto = new PessoaContacto;

        $pessoaContacto->nome = $request->input('nome_pessoa');
        $pessoaContacto->email = $request->input('email_pessoa');
        $pessoaContacto->telefone = $request->input('telefone_pessoa');
        $pessoaContacto->celular = $request->input('celular_pessoa');

        $forncedor->pessoasContacto()->save($pessoaContacto);

        $this->getRightDocs($tipofornecedor, $forncedor);

    return redirect(route('home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $forncedor= Fornecedor::find($id);

       return view('fornecedores.edit')->withFornecedor($forncedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $forncedor= Fornecedor::find($id);

        $forncedor->update(['nome'=>$request->input('nome'), 'tipo'=>$request->input('tipo'), 'localizacao'=>$request->input('localizacao')]);

        return redirect(route('home'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getPessoaContactoDetails($fornecedor_id, $pessoaContacto_id){

        $fornecedor= Fornecedor::find($fornecedor_id);
        $pessoaContacto = PessoaContacto::find($pessoaContacto_id);

        return view('fornecedores.responsible')->withPessoaContacto($pessoaContacto)->withFornecedor($fornecedor);
    }

    public function notifyPessoaContacto(Request $request, $fornecedor_id, $pessoaContacto_id)
    {
        $pessoaContacto = PessoaContacto::find($pessoaContacto_id);

        $canal = $request->input('options');

            if ($canal == 3) {
                Helpers::enviar_sms($pessoaContacto->celular, $request->input('mensagem'));

            } else if($canal == 2) {
                Helpers::sendWelcomeMail($pessoaContacto, $request->input('mensagem'));

            }else{
                Helpers::enviar_sms($pessoaContacto->celular, $request->input('mensagem'));
                Helpers::sendWelcomeMail($pessoaContacto, $request->input('mensagem'));
            }
            



        // $data = array('name'=>$pessoaContacto->nome,"email"=>$pessoaContacto->email, "body" => "Test mail");
        // Mail::send('emails.mail',  $data, function($message) {
        //     $message->to('TO_EMAIL_ADDRESS',  "j.anantlal@gmail.com")
        //             ->subject('Artisans Web Testing Mail');
        // });

        
        // $pessoaContacto->notify(new PessoaContacto());
    }

    public function documentsRequest($id){
        $forncedor = Fornecedor::find($id);
       
        $listOfDocs = $this->getRightDocs($forncedor->tipofornecedor->designacao);

        //dd($listOfDocs);
        return view('fornecedores.documentUpload')->withFornecedor($forncedor)
                    ->with('documentos',$listOfDocs);

    }

    public function showkyvStatus($id){

        return view('kyv.show');
    }

    private function getRightDocs($designacao){
     
        $documentos = null;

        if($designacao =="Empresa Nacional") {
            $documentos = DB::table('empresa_nacional_docs')->distinct()->get();

            //enviar e-mail com link de formulario certo.
        }elseif ($designacao =="Empresa em nome individual") {
            $documentos = DB::table('empresa_em_nome_individual_docs')->distinct()->get();

        }elseif ($designacao =="Empresa Estrangeira") {
            $documentos = DB::table('empresa_estrangeira_docs')->distinct()->get();

        }elseif ($designacao =="Associacoes") {
            $documentos = DB::table('associacoes_docs')->distinct()->get();

        }elseif ($designacao =="ATM-Agencias") {
            $documentos = DB::table('atm_agencias_docs')->distinct()->get();

        }elseif ($designacao =="Instituicoes do Estado") {
            $documentos = DB::table('instituicos_do_estado_docs')->distinct()->get();

        }else {
            $documentos = DB::table('petty_cash_docs')->distinct()->get();

        }
        return $documentos;
    }

}
