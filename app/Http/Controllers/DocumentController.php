<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\TipoFornecedor;
use App\FornecedorDocs;

class DocumentController extends Controller
{
    public function show($id)
  {
     
  }

  public function save_docs(Request $request, $fornecedor_id)
  {
      
            if ($request->hasFile('file')) {
                $file =$request->file('file');
                $path          =str_random(20);
                $ficheiro = new FornecedorDocs;
                $ficheiro->extensao = $file->guessExtension();
                $ficheiro->tamanho = $file->getMaxFilesize();
                $ficheiro->mime = $file->getMimeType();
        if (in_array($ficheiro->mime, ['application/x-pdf', 'application/pdf'])) {
        $acta = new Acta;
        $acta->encontro()->associate($encontro);
        $acta->supervisao()->associate($supervisao);
        $acta->save();
        $ficheiro->acta()->associate($acta);
        $ficheiro->path =$path;
        if ($ficheiro->save()) {
        $file->move("./imagem",$path);
        for ($i=0; $i <count($actividades_ids) ; $i++) {
            $actividade = Actividade::find($actividades_ids[$i]);
            $acta->actividades()->attach($actividade);
        }
        }else {
            echo 'Erro';
        }
  }

}
