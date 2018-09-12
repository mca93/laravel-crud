@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
             <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        Profile da Minha Empresa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Documentos Necessarios
                    </a>
                </li>
            </ul>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="tab-content" id="myTabContent">
<!--Inicio primeiro tab-content-->
                <div class="tab-pane fade col-md-9 col-md-offset-1" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="{{ route('fornecedor.store') }}" method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tipo de Fornecedor</label>
                            <input type="text" class="form-control" id="tipo_fornecedor" value = "{{$fornecedor->tipofornecedor->designacao}}"name="tipo_fornecedor" disabled>     
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
                                            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{$fornecedor->nome}}">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="nome">NUIT</label>
                                                <input type="number" class="form-control" id="nuit" name="nuit" aria-describedby="emailHelp" value="{{$fornecedor->nuit}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">E-mail do Fornecedor</label>
                                                    <input type="email" class="form-control" id="email_fornecedor" name="email_fornecedor" aria-describedby="emailHelp" value="{{$fornecedor->email}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="nome">Telefone</label>
                                                <input type="number" class="form-control" id="telefone_fornecedor" name="telefone_fornecedor" aria-describedby="emailHelp" value="{{$fornecedor->telefone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Categoria do Fornecedor</label>
                                                    <input type="text"  class="form-control" id="categoria_fornecedor" name="categoria_fornecedor" aria-describedby="emailHelp" value="{{$fornecedor->categoria->designacao}}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Pais do Fornecedor</label>
                                                    <input type="text" class="form-control" id="pais_fornecedor" name="pais_fornecedor"value="{{$fornecedor->pais->designacao}}" disabled>
                                                                
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Cidade do Fornecedor</label>
                                                    <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="emailHelp" value="{{$fornecedor->cidade}}">              
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Avenida/Ruar</label>
                                                    <input type="text" class="form-control" id="localizacao" name="localizacao"  value="{{$fornecedor->localizacao}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Numero</label>
                                                    <input type="number" class="form-control" id="numero" name="numero" aria-describedby="emailHelp" value="{{$fornecedor->numero}}">              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--inicio Card 2-->

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
                                        <input type="text" class="form-control" id="nome_pessoa" name="nome_pessoa" aria-describedby="emailHelp" value="{{$fornecedor->pessoasContacto->first()->nome}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">E-mail da Pessoa</label>
                                            <input  type="email" class="form-control" id="email_pessoa" name="email_pessoa" aria-describedby="emailHelp" value="{{$fornecedor->pessoasContacto->first()->email}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="nome">Telefone</label>
                                        <input type="number" class="form-control" id="telefone_pessoa" name="telefone_pessoa" aria-describedby="emailHelp" value="{{$fornecedor->pessoasContacto->first()->telefone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="nome">Celular da Pessoa</label>
                                        <input type="text" class="form-control" id="celular_pessoa" name="celular_pessoa" aria-describedby="emailHelp" value="{{$fornecedor->pessoasContacto->first()->celular}}">
                                        </div>
                                    </div>
                                </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!--fim card 2-->

                              <!--inicio Card 3-->

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
                            <input type="text" class="form-control" id="banco_fornecedor" name="banco_fornecedor" aria-describedby="emailHelp" value="{{$fornecedor->banco}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Praça do Banco</label>
                                <input  type="text" class="form-control" id="praca_dobanco_dofofornecedor" name="praca_dobanco_dofofornecedor" aria-describedby="emailHelp" value="{{$fornecedor->praca}}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="nome">Numero da Conta</label>
                            <input type="number" class="form-control" id="conta_fornecedor" name="conta_fornecedor" aria-describedby="emailHelp" value="{{$fornecedor->conta}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="nome">NIB / IBAN</label>
                            <input type="text" class="form-control" id="nib_fornecedor" name="nib_fornecedor" aria-describedby="emailHelp" value="{{$fornecedor->nib}}">
                            </div>
                        </div>
                    </div>   

                       <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                            <label for="nome">Moeda da Conta</label>
                            <input type="text" class="form-control" id="moeda_conta" name="moeda_conta" aria-describedby="emailHelp" value="{{$fornecedor->moeda}}">
                            </div>
                        </div>
                    </div>         
                                       
                                    </div>
                                </div>
                            </div>
                            <!--fim card 3-->
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Actualizar Dados do Perfil da Minha Empresa</button>

                    </form>
                </div>
<!--Fim primeiro tab-content-->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="col-md-10">
                        <h2 class="display-" align="center" >Faça Upload dos Documentos Seguintes</h2>
                    </div>
                    <div class="col-md-offset-2">
                    <form action = "{{route('save', ['id'=>$fornecedor->id])}}" method="POST" enctype="multipart/form-data"> 
                    {{ csrf_field() }}

                    @if($fornecedor->tipofornecedor->designacao == "Empresa Nacional")
                @foreach($documentos as $documento)
                    <div class="col-md-10">
                        <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                    </div>
                    <div class="col-md-4">
                        <label for="dataEmissao"> Data de Emissao</label>
                        <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                    </div>
                        @if($documento->prazo =="Sim")
                        <div class="col-md-4">
                            <label for="dataValidade"> Valido ate</label>
                            <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                        </div>
                        @endif
                    
                    <div class="col-md-6" style="margin-top: 10px">
                        <div class="upload-btn-wrapper">
                        <button class="upload-btn" >Upload a file</button>
                        <input type="file" name="myfile{{$documento->id}}" />
                        </div>
                    </div>
                @endforeach
              @elseif($fornecedor->tipofornecedor->designacao == "Empresa em nome individual")
                @foreach($documentos as $documento)
                    <div class="col-md-10">
                        <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                    </div>
                    <div class="col-md-4">
                        <label for="dataEmissao"> Data de Emissao</label>
                        <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                    </div>
                        @if($documento->prazo =="Sim")
                        <div class="col-md-4">
                            <label for="dataValidade"> Valido ate</label>
                            <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                        </div>
                        @endif
                    
                    <div class="col-md-6" style="margin-top: 10px">
                        <div class="upload-btn-wrapper">
                        <button class="upload-btn">Upload a file</button>
                        <input type="file" name="myfile{{$documento->id}}" />
                        </div>
                    </div>
                @endforeach
              @elseif($fornecedor->tipofornecedor->designacao == "Empresa Estrangeira")
                @foreach($documentos as $documento)
                        <div class="col-md-10">
                            <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                        </div>
                        <div class="col-md-4">
                            <label for="dataEmissao"> Data de Emissao</label>
                            <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                        </div>
                            @if($documento->prazo =="Sim")
                            <div class="col-md-4">
                                <label for="dataValidade"> Valido ate</label>
                                <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                            </div>
                            @endif
                        
                        <div class="col-md-6" style="margin-top: 10px">
                            <div class="upload-btn-wrapper">
                            <button class="upload-btn">Upload a file</button>
                            <input type="file" name="myfile{{$documento->id}}" />
                            </div>
                        </div>
                    @endforeach
              @elseif($fornecedor->tipofornecedor->designacao == "Associacoes")
                @foreach($documentos as $documento)
                            <div class="col-md-10">
                                <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                            </div>
                            <div class="col-md-4">
                                <label for="dataEmissao"> Data de Emissao</label>
                                <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                            </div>
                                @if($documento->prazo =="Sim")
                                <div class="col-md-4">
                                    <label for="dataValidade"> Valido ate</label>
                                    <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                                </div>
                                @endif
                            
                            <div class="col-md-6" style="margin-top: 10px">
                                <div class="upload-btn-wrapper">
                                <button class="upload-btn">Upload a file</button>
                                <input type="file" name="myfile{{$documento->id}}" />
                                </div>
                            </div>
                        @endforeach
              @elseif($fornecedor->tipofornecedor->designacao == "ATM-Agencias")
              @foreach($documentos as $documento)
                                <div class="col-md-10">
                                    <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                                </div>
                                <div class="col-md-4">
                                    <label for="dataEmissao"> Data de Emissao</label>
                                    <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                                </div>
                                    @if($documento->prazo =="Sim")
                                    <div class="col-md-4">
                                        <label for="dataValidade"> Valido ate</label>
                                        <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                                    </div>
                                    @endif
                                
                                <div class="col-md-6" style="margin-top: 10px">
                                    <div class="upload-btn-wrapper">
                                    <button class="upload-btn">Upload a file</button>
                                    <input type="file" name="myfile{{$documento->id}}" />
                                    </div>
                                </div>
                @endforeach
              @elseif($fornecedor->tipofornecedor->designacao == "Instituicoes do Estado")
                @foreach($documentos as $documento)
                                <div class="col-md-10">
                                    <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                                </div>
                                <div class="col-md-4">
                                    <label for="dataEmissao"> Data de Emissao</label>
                                    <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                                </div>
                                    @if($documento->prazo =="Sim")
                                    <div class="col-md-4">
                                        <label for="dataValidade"> Valido ate</label>
                                        <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                                    </div>
                                    @endif
                                
                                <div class="col-md-6" style="margin-top: 10px">
                                    <div class="upload-btn-wrapper">
                                    <button class="upload-btn">Upload a file</button>
                                    <input type="file" name="myfile{{$documento->id}}" />
                                    </div>
                                </div>
                @endforeach
              @else
              @foreach($documentos as $documento)
                                <div class="col-md-10">
                                    <h4><span class="badge badge-secondary">{{$documento->id}}</span>{{$documento->designacao}}</h4>
                                </div>
                                <div class="col-md-4">
                                    <label for="dataEmissao"> Data de Emissao</label>
                                    <input type="date" class="form-control" id="dataEmissaoDoc{{$documento->id}}" name="dataEmissaoDoc{{$documento->id}}" placeholder="Data de Emissao">
                                </div>
                                    @if($documento->prazo =="Sim")
                                    <div class="col-md-4">
                                        <label for="dataValidade"> Valido ate</label>
                                        <input type="date" class="form-control" id="dataValidade{{$documento->id}}" name="dataValidade{{$documento->id}}" placeholder="Valido Ate">
                                    </div>
                                    @endif
                                
                            <div class="col-md-6" style="margin-top: 10px">
                                <div class="upload-btn-wrapper">
                                    <button class="upload-btn">Upload a file</button>
                                    <input type="file" name="myfile{{$documento->id}}" id="myfile{{$documento->id}}"/>
                                </div>
                            </div>
                @endforeach
            @endif
            <div class="col-md-10" style="margin-top:20px">
                <div class="col-md-5">
                <button type="button" class="btn btn-success btn-block">Gravar os Documentos</button>
                </div>
                <div class="col-md-5">
                <button type="submit" class="btn btn-primary btn-block">Submeter os Documentos</button>      
                </div>
            </div>
            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection