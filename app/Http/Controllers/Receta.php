<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;
use Illuminate\Support\Facades\DB;

class Receta extends Controller
{
  public function recetario(){
    $productos=DB::select('SELECT `receta`.`id_receta`, `receta`.`nombre_receta`, `receta`.`ruta_img`, `cocina`.`nombre_cocina`, `categoria`.`nombre_categoria`
    FROM `receta`
	  LEFT JOIN `cocina` ON `receta`.`id_cocina` = `cocina`.`id_cocina`
	  LEFT JOIN `categoria` ON `receta`.`id_categoria` = `categoria`.`id_categoria`');
    return view('receta', ['listado'=>$productos]);
  }
}
