@extends('layouts.app')

@section('content')
  <div class="container"  >
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card" >
                  <div class="card-header">
                    <h1 class="display-4">{{$producto->nombre_receta}}</h1>
                    <h5 class="float-left">{{$producto->autor}}</h5>
                  </div>

                  <div class="card-body" style="margin:20px">
                    <div class="row justify-content-center">
                        <div class="float-center">
                            <img src="{{$producto->ruta_img}}" style="width: 400px">
                        </div>
                    </div></br>
                    <div class="row espacio">
                        <h3 class="float-left">Ingredientes:</h3>
                    </div></br>
                    <div class="row" >
                        <textarea style="height: 200px; width:200px" readonly>{{$producto->ingredientes}}</textarea>
                    </div></br>
                    <div class="row espacio">
                        <h3 class="float-left">Procedimiento:</h3>
                    </div></br>
                    <div class="row ">
                        <textarea style="height: 200px; width:700px" readonly>{{$producto->procedimiento}}</textarea>
                    </div>
                    <div class="row espacio">
                        <h3 class="float-left">Observaciones:</h3>
                    </div></br>
                    <div class="row ">
                        <textarea style="height: 150px; width:500px" readonly>{{$producto->observaciones}}</textarea>
                    </div></br>
                    <input type="button" class="bnt btn-danger" onclick="window.print();" value="Imprimir">
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
