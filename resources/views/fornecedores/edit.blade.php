@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <form action="{{url('fornecedor/'.$fornecedor->id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{$fornecedor->nome}}">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo"  value="{{$fornecedor->tipo}}">
            </div>
            <div class="form-group">
                <label for="localizacao">Localizacao</label>
                <input type="text" class="form-control" id="localizacao" name="localizacao"  value="{{$fornecedor->localizacao}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Alterar o fornecedor</button>
        </form>
    </div>
</div>
@endsection
