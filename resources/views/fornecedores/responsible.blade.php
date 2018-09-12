@extends('layouts.master')
@section('content')
<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
         <img src="{{asset('images/usr.png')}}">
         <span class="badge badge-default" style="font-family: sans-serif; font-size: 20px"><b>{{$pessoaContacto->nome}}</span>
        </div>
        <div class = "row">
        </div>
        <div class="col-md-6 col-md-offset-2">
        <span class="badge badge-default" style="font-family: sans-serif; font-size: 20px;">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Pessoa de Contacto {{substr($fornecedor->nome, 0, 20)}}{{strlen($fornecedor->nome)>20 ? "...": ""}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>E-mail</th>
              <td>{{$pessoaContacto->email}}</td>
            </tr>
            <tr>
              <th>Celular</th>
              <td>{{$pessoaContacto->celular}}</td>
            </tr>
            <tr>
              <th>Telefone</th>
              <td>{{$pessoaContacto->telefone}}</td>
            </tr>
        </tbody>
        </table>
          </span>
          <div class = "col-md-offset-2" style=" margin-left: 30px; margin-top: 10px">
          <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block"><i class="fa fa-envelope"></i>Notificar a pessoa de contacto</button>
          </div>
        </div>
      </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notificar a {{$pessoaContacto->nome}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('notify', ['fornecedor_id'=>$fornecedor->id, 'pessoaContacto_id'=>$fornecedor->pessoasContacto()->first()->id])}}" method="POST">
        {{ csrf_field() }}
        <div class="col-md-12">
            <div class="btn-group btn-group-toggle" data-toggle="buttons" onchange="teste()">
                <label class="btn btn-secondary active">
                  <input type="radio" name="options" id="option1" value="1" autocomplete="off" checked>Notificar por SMS e E-mail
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option2" value="2" autocomplete="off"> Apenas por E-mail
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option3" value="3" autocomplete="off"> Apenas por SMS
                </label>
              </div>
        </div>
         <div class="col-md-12">
          <div class="form-group" id="email">
            <label for="exampleFormControlInput1">Assunto</label>
            <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Envio de documentos">
          </div>
         <div class="form-group" id="tudo">
            <label for="mensagem">Mensagem da Notificacao</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
          </div>
         </div>
         <button type="submit" class="btn btn-primary">Enviar a Notificacao</button>
        </form>
     
    </div>
  </div>
</div>


<script>
  function teste(){
    var myRadio = $("input[name=options]");
    var checkedValue = myRadio.filter(":checked").val();
    var assunto = document.getElementById('email');

      if(checkedValue==3){
       assunto.style.display = "none"; 
      }else{
        assunto.style.display = "block";
      }

  }
</script>
@endsection
