@extends('layouts.app')

@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">Ingresar Receta</div>

                <div class="card-body">
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

                  <form action="{{url('/insertarreceta')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="float-center" style="margin-bottom: 5%">
                      <h2 class="float-center">INGRESO DE PRODUCTOS</h2>
                    </div>
                    <div class="row espacio">
                        <div class="col">
                            <h5 class="float-left">Nombre</h5>
                        </div>
                        <div class="col">
                            <input type="text" name="nombre_receta" class="form-control">
                        </div>
                    </div></br>
                    <div class="row espacio">
                        <div class="col">
                            <h5 class="float-left">Ingredientes</h5>
                        </div>
                        <div class="col">
                            <textarea type="text" name="ingredientes" class="form-control"></textarea>
                        </div>
                    </div></br>
                    <div class="row espacio">
                        <div class="col">
                            <h5 class="float-left">Procedimiento</h5>
                        </div>
                        <div class="col">
                            <textarea type="text" name="procedimiento" class="form-control"></textarea>
                        </div>
                    </div></br>

                    <div class="row espacio">
                        <div class="col">
                            <h5 class="float-left">Autor</h5>
                        </div>
                        <div class="col">
                            <input type="text" name="autor" class="form-control">
                        </div>
                    </div></br>
                    <div class="row espacio">
                        <div class="col">
                            <h5 class="float-left">Observaciones</h5>
                        </div>
                        <div class="col">
                            <textarea type="text" name="observaciones" class="form-control"></textarea>
                        </div>
                    </div></br>
                    <div class="row espacio">
                      <div class="col">
                          <h5 class="float-left">Categoria</h5>
                      </div>
                      <div class="col">
                          <select name="id_categoria" class="form-control">
                            <option value="1">Entrada</option>
                            <option value="2">Plato fuerte</option>
                            <option value="3">Aperitivo</option>
                            <option value="4">Postre</option>
                            <option value="5">Bebida</option>
                          </select>
                      </div>
                    </div></br>
                    <div class="row espacio">
                      <div class="col">
                          <h5 class="float-left">Cocina</h5>
                      </div>
                      <div class="col">
                          <select name="id_cocina" class="form-control">
                            <option value="1">Internacional</option>
                            <option value="2">De Autor</option>
                            <option value="3">Nacional</option>
                            <option value="4">Italiana</option>
                            <option value="5">Mediterranea</option>
                          </select>
                      </div>
                    </div>
                    </br>
                    <div class="row espacio">
                      <div class="col">
                          <h5 class="float-left">Imagen</h5>
                      </div>
                        <div class="col">
                            <input type="file" name="ruta_img" value="">
                        </div>
                    </div>
                    </br>
                    <button type="submit" class = "btn btn-primary">Añadir al recetario</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
