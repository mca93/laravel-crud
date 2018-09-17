@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
    <div class = "col-md-offset-10">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Adicionar</button>
    </div>
    </div>
    <div class="row">
    <table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">Cidade</th>
            <th class="text-center">Pessoa de Contacto</th>
            <!--<th class="text-center">KYV Status</th> -->

            <th class="text-center"> Accoes</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fornecedores as $fornecedor)
        <tr>
            <td class="text-center">{{substr($fornecedor->nome, 0, 10)}}{{strlen($fornecedor->nome)>10 ? "...": ""}}</td>
            <td class="text-center">{{$fornecedor->cidade}}</td>
            <td class="text-center"><a href="{{route('responsavel', ['fornecedor_id'=>$fornecedor->id, 'pessoaContacto_id'=>$fornecedor->pessoasContacto()->first()->id])}}">{{substr($fornecedor->pessoasContacto()->first()->nome, 0, 10)}}{{strlen($fornecedor->pessoasContacto()->first()->nome)>10 ? "...": ""}}</a></td>
            <!--<td class="text-center">{{$fornecedor->kyv_status}}</td>-->

            <td class="text-center">
                <a href="{{route('fornecedor.edit',['id'=>$fornecedor->id])}}" class="btn btn-warning"><span class="fa fa-edit">Alterar</span></a>
                <a href="{{route('kyv',['id'=>$fornecedor->id])}}"  class="btn btn-success"><span class="fa fa-eye">Visualizar</span></button>
            </td>
            </tr>
    @endforeach
    </tbody>
</table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Fornecedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="{{ route('fornecedor.store') }}" method="POST" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlSelect2">Tipo de Fornecedor</label>
                <select class="form-control" id="tipo_fornecedor" name="tipo_fornecedor">
                 @foreach($tiposfornecedores as  $tipofornecedor)
                    <option value="{{$tipofornecedor->id}}">{{$tipofornecedor->designacao}}</option>
                 @endforeach
                </select>
            </div>
            <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <b><span class="fa fa-home"> Detalhes da Empresa</span></b>
                    </button>
                </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Ex: Imovisa">
                        </div>
                 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">NUIT</label>
                        <input type="number" class="form-control" id="nuit" name="nuit" aria-describedby="emailHelp" placeholder="Ex: 14657739">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">E-mail do Fornecedor</label>
                            <input type="email" class="form-control" id="email_fornecedor" name="email_fornecedor" aria-describedby="emailHelp" placeholder="Ex: info@standardbank.co.mz">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="number" class="form-control" id="telefone_fornecedor" name="telefone_fornecedor" aria-describedby="emailHelp" placeholder="Ex: +258 82146579">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Categoria do Fornecedor</label>
                            <select  class="form-control" id="categoria_fornecedor" name="categoria_fornecedor" aria-describedby="emailHelp">
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->designacao}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Pais do Fornecedor</label>
                            <select class="form-control" id="pais_fornecedor" name="pais_fornecedor">
                            @foreach($paises as  $pais)
                                <option value="{{$pais->id}}">{{$pais->designacao}}</option>
                            @endforeach
                            </select>                
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Cidade do Fornecedor</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="emailHelp" placeholder="Ex: Cidade de Maputo">              
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Avenida/Ruar</label>
                            <input type="text" class="form-control" id="localizacao" name="localizacao"  placeholder="Ex: Av. Eduardo Mondlane">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Numero</label>
                            <input type="number" class="form-control" id="numero" name="numero" aria-describedby="emailHelp" placeholder="Ex: 1234">              
                        </div>
                    </div>
                </div>

                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b><span class="fa fa-user"> Detalhes da Pessao de Contacto</span></b>
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">Nome da Pessoa</label>
                        <input type="text" class="form-control" id="nome_pessoa" name="nome_pessoa" aria-describedby="emailHelp" placeholder="Ex: Laercio Mondlane">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">E-mail da Pessoa</label>
                            <input  type="email" class="form-control" id="email_pessoa" name="email_pessoa" aria-describedby="emailHelp" placeholder="Ex: Laercio.Mondlane@standardbank.co.mz">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="number" class="form-control" id="telefone_pessoa" name="telefone_pessoa" aria-describedby="emailHelp" placeholder="Ex: +258 82146579">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">Celular da Pessoa</label>
                        <input type="number" class="form-control" id="celular_pessoa" name="celular_pessoa" aria-describedby="emailHelp" placeholder="Ex: +258 82146579">
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     <b><span class="fa fa-bank">Detalhes Bancarios</span></b>

                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">Nome do Banco</label>
                        <input type="text" class="form-control" id="banco_fornecedor" name="banco_fornecedor" aria-describedby="emailHelp" placeholder="Ex: Standard Bank">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Praça do Banco</label>
                            <input  type="text" class="form-control" id="praca_dobanco_dofofornecedor" name="praca_dobanco_dofofornecedor" aria-describedby="emailHelp" placeholder="Ex: Baix da Cidade Maputo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">Numero da Conta</label>
                        <input type="number" class="form-control" id="conta_fornecedor" name="conta_fornecedor" aria-describedby="emailHelp" placeholder="Ex:82146579">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nome">NIB / IBAN</label>
                        <input type="text" class="form-control" id="nib_fornecedor" name="nib_fornecedor" aria-describedby="emailHelp" placeholder="Ex: 5432382146579">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                        <label for="nome">Moeda da Conta</label>
                        <input type="text" class="form-control" id="moeda_conta" name="moeda_conta" aria-describedby="emailHelp" placeholder="Ex: MZN">
                        </div>
                    </div>
                </div>                     
                 </div>
                </div>
            </div>
            </div>          
            <button type="submit" class="btn btn-primary btn-block">Adicionar o fornecedor</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
