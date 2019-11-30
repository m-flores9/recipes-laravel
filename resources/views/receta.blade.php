@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-14">
          <div class="jumbotron jumbotron-fluid" style="background-color: #FFFFFF; ">
            <div class="container">
              <h1 class="display-4">Recetas</h1>
              <p class="lead">Recetario completo</p>
            </div>
          </div>
            <div class="card-columns" style="background-color: #FFFFFF; ">
              <section class="recipes-page spad">
                @if(count($listado)>0)
                  @foreach ($listado as $producto)

                    <div class="card" style="width: 18rem; margin: 20px">
                      <img src="{{$producto->ruta_img}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{$producto->nombre_receta}}</h5>
                        <h6>Categoria: {{$producto->nombre_categoria}}</h6>
                        <h6>Cocina: {{$producto->nombre_cocina}}</h6>
                        <a href="/mostrar_update/{{$producto->id_receta}}" class="btn btn-primary">Ver receta</a>
                      </div>
                    </div>

                  @endforeach
                @endif
              </section>

            </div>
        </div>
    </div>
</div>
@endsection
