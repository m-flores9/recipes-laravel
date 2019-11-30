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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif
                    @if (session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif

                    <form action="{{url('/update_receta')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="row justify-content-center">
                        <div class="float-center">
                            <img src="{{$producto->ruta_img}}" style="width: 400px">
                        </div>
                    </div></br>
                    <input hidden name="id_receta" class="form-control" value="{{$producto->id_receta}}">
                    <input hidden name="nombre_producto" class="form-control" value="{{$producto->nombre_receta}}">
                    <div class="row espacio">
                        <h3 class="float-left">Ingredientes:</h3>
                    </div></br>
                    <div class="row" >
                        <textarea type="text" name="ingredientes" class="form-control" style="height: 200px; width:200px">{{$producto->ingredientes}}</textarea>
                    </div></br>
                    <div class="row espacio">
                        <h3 class="float-left">Procedimiento:</h3>
                    </div></br>
                    <div class="row ">
                        <textarea type="text" name="procedimiento" class="form-control" style="height: 200px; width:500px">{{$producto->procedimiento}}</textarea>
                    </div>
                    <div class="row espacio">
                        <h3 class="float-left">Observaciones:</h3>
                    </div></br>
                    <div class="row ">
                        <textarea type="text" name="observaciones" class="form-control" style="height: 150px; width:500px">{{$producto->observaciones}}</textarea>
                    </div></br>
                    <div class="row espacio">
                      <div class="col">
                          <h5 class="float-left">Publica:</h5>
                      </div>
                      <div class="col">
                          <select name="id_usuario" class="form-control">
                            <option value="1">Si</option>
                            <option value="2">No</option>
                          </select>
                      </div>
                    </div></br>
                    <button type="submit" class = "btn btn-primary">Actualizar</button>

                  <form>
                    </div>
              </div>
          </div>
      </div>
  </div>
@endsection
