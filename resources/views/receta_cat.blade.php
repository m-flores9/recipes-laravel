@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-14">
          <div class="jumbotron jumbotron-fluid" style="background-color: #FFFFFF; ">
            <div class="container">
              <h1 class="display-4">Categorias</h1>
              <p class="lead">Recetario por categorias</p>
            </div>
          </div>
            <div class="card-columns" style="background-color: #FFFFFF; ">
              <section class="recipes-page spad">
                <div class="card" style="width: 18rem; margin: 20px">
                  <img src="https://comohacerpara.com/imgn/03686-preparar-entradas-sabrosas-originales-rapidas.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Entradas</h5>

                    <a href="/recetario_cate/1" class="btn btn-primary">Ver recetas</a>
                  </div>
                </div>
                <div class="card" style="width: 18rem; margin: 20px">
                  <img src="http://escueladequesos.com/wp-content/uploads/2015/06/recetas_cover_platos_fuertes.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Platos fuertes</h5>

                    <a href="/recetario_cate/2" class="btn btn-primary">Ver recetas</a>
                  </div>
                </div>
                <div class="card" style="width: 18rem; margin: 20px">
                  <img src="https://mejorconsalud.com/wp-content/uploads/2017/10/4-Postres-caseros-nutritivos-y-con-muy-pocos-ingredientes-500x334.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Postres</h5>

                    <a href="/recetario_cate/4" class="btn btn-primary">Ver recetas</a>
                  </div>
                </div>
              </section>

            </div>
        </div>
    </div>
</div>
@endsection
