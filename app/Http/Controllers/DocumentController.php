<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\TipoFornecedor;
use App\FornecedorDocs;
use App\Http\Controllers\FornecedorController;

class DocumentController extends Controller
{
    public static function show($fornecedor_id, $tipofornecedor_id)
  {
        $fornecedorDocs = FornecedorDocs::where('fornecedor_id', '=', $fornecedor_id)
                                            ->where('tipofornecedor_id', '=', $tipofornecedor_id)->get();
        
  }

  public function save_docs(Request $request, $fornecedor_id)
  {
    $fornecedor = Fornecedor::find($fornecedor_id);

   
    $documentos = FornecedorController::getRightDocs($fornecedor->tipofornecedor->designacao);
    foreach ($documentos as $documento) {
      

        if ($request->hasFile('myfile'.$documento->id)) {
            $file =$request->file('myfile'.$documento->id);
            $path          =str_random(20);
            $ficheiro = new FornecedorDocs;
            $ficheiro->extensao = $file->guessExtension();
            $ficheiro->tamanho = $file->getMaxFilesize();
            $ficheiro->mime = $file->getMimeType();

            if (in_array($ficheiro->mime, ['application/x-pdf', 'application/pdf'])) {
                // $tipofornecedor = TipoFornecedor::find($fornecedor->tipofornecedor->id);

            $ficheiro->fornecedor()->associate($fornecedor);
            $ficheiro->tipofornecedor()->associate($fornecedor->tipofornecedor->id);

            $ficheiro->path =$path;
            $ficheiro->doc_id =$documento->id;
            if ($documento->prazo=="Nao") {
                $ficheiro->data_emissao = date('Y-m-d', strtotime($request->input('dataEmissaoDoc'.$documento->id)));
                $ficheiro->data_validade = date('Y-m-d', strtotime($request->input('dataValidade'.$documento->id). ' + 2 years'));

            } else {
                $ficheiro->data_emissao = date('Y-m-d', strtotime($request->input('dataEmissaoDoc'.$documento->id)));
                $ficheiro->data_validade = date('Y-m-d', strtotime($request->input('dataValidade'.$documento->id)));

            }
            
            if ($ficheiro->save()) {
            $file->move("./imagem",$path);



            }else {
                echo 'Erro';
            }
    }
 
  }
}
}

}
