@extends('layouts.app')


@section('content')

<div class="jumbotron jumbotron-fluid">

                <div class="col-md-offset-6">
                <img src="{{asset('images/home_logo.png')}}" alt="" width="50px">
                </div>


    <h2 class="display-4" align="center" >Faça Upload dos Documentos Seguintes</h2>
    <div class = "col-md-offset-3" style="margin-top: 20px">

    <div class="row">
        <h4><span class="badge badge-secondary">1 </span> Formulário de Vendor Preenchido</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissaoDoc1" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade1" placeholder="Valido Ate">
        </div>

       

         <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    <div class="row">
        <h4><span class="badge badge-secondary">2 </span> Cópia de Alvará ou Licença da firma</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao2" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade2" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>


    <div class="row">
        <h4><span class="badge badge-secondary">3 </span> Certidão de registo da firma</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao3" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade3" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>


        <div class="row">
        <h4><span class="badge badge-secondary">4 </span> Publicação no Boletim da República</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao4" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade4" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>


   <div class="row">
        <h4><span class="badge badge-secondary">5 </span> Certidão de quitação das Finanças</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao5" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade5" placeholder="Valido Ate">
        </div>
           <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    
   <div class="row">
        <h4><span class="badge badge-secondary">6 </span> Certidão de quitação do INSS</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao6" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade6" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>


    <div class="row">
        <h4><span class="badge badge-secondary">7 </span> Documento de Atribuição de NUIT ou Copia do Cartão do NUIT</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao7" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade7" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>


    <div class="row">
        <h4><span class="badge badge-secondary">8 </span> Amostra do Modelo de Factura e Recibo anulado</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao8" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade8" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    <div class="row">
        <h4><span class="badge badge-secondary">9 </span> Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao9" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade9" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    <div class="row">
        <h4><span class="badge badge-secondary">10 </span> Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco </h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao10" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade10" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    <div class="row">
        <h4><span class="badge badge-secondary">11 </span> Declaração de Existencia de Plano de Contingencia na Empresa (somente para empresa consideradas criticas)</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao11" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade11" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    <div class="row">
        <h4><span class="badge badge-secondary">12 </span> Codigo de Conduta</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao12" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade12" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>

    <div class="row">
        <h4><span class="badge badge-secondary">13 </span> Declaração de Confidencialidade</h4>
        <div class="col-md-4">
        <label for="dataEmissao"> Data de Emissao</label>
        <input type="date" class="form-control" id="dataEmissao13" placeholder="Data de Emissao">
        </div>
        <div class="col-md-4">
        <label for="dataValidade"> Valido ate</label>
        <input type="date" class="form-control" id="dataValidade13" placeholder="Valido Ate">
        </div>
        <div class="col-md-6" style="margin-top: 10px">
             <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name="myfile" />
        </div>
        </div>
    </div>


<div class="col-md-8" style="margin-top: 30px">
    <button type="button" class="btn btn-primary btn-block">Submeter</button>
</div>
  </div>
  </div>
</div>
@endsection