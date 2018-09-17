@extends('layouts.master')


@section('content')


  


 <div class="content">
    <div class="col-md-offset-10" style="margin-bottom: 30px">

            <h3 class="display-6">KYV Status: <span class="badge badge-danger">
              @if(count($expected_docs) == count($kyvdocs))
                YES
              @else
                NO
              @endif
            </span></h3>
    </div>

    <!--Documentos inserdidos-->
    <h2 class="display-4" align="center" >Documentos Inseridos</h2>

    <div class="accordion" id="accordionExample">
    
      @foreach($expected_docs as $expected_doc)
        @foreach($kyvdocs as $inserted_doc)
            @if($inserted_doc->doc_id == $expected_doc->id)
            <div class="card">
              <div class="card-header" id="heading{{$inserted_doc->doc_id}}">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapse{{$inserted_doc->doc_id}}">
                    {{$expected_doc->designacao}}
                  </button>
                </h5>
              </div>

              <div id="collapse{{$inserted_doc->doc_id}}" class="collapse show" aria-labelledby="heading{{$inserted_doc->doc_id}}" data-parent="#accordionExample">
                <div class="card-body">
                  <embed src="{{'./imagem/'.$inserted_doc->path}}" width="800px" height="2100px" />
                </div>
              </div>
            </div>
            @else

            <div class="alert alert-danger" role="alert">
              {{$expected_doc->designacao}} em falta!
            </div>
            @endif
        @endforeach
      @endforeach
        
    </div>

    <!-- Documentos em Falta -->
 
 </div>
@endsection