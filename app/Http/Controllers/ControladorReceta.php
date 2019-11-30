<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;
use Illuminate\Support\Facades\DB;

class ControladorReceta extends Controller
{
  public function recetario(){
    $productos=DB::select('SELECT `receta`.`id_receta`, `receta`.`nombre_receta`, `receta`.`ruta_img`, `cocina`.`nombre_cocina`, `categoria`.`nombre_categoria`
    FROM `receta`
	  LEFT JOIN `cocina` ON `receta`.`id_cocina` = `cocina`.`id_cocina`
	  LEFT JOIN `categoria` ON `receta`.`id_categoria` = `categoria`.`id_categoria`');
    return view('receta', ['listado'=>$productos]);
  }

  public function recetario_publico(){
    $productos=DB::select('SELECT `receta`.`id_receta`, `receta`.`nombre_receta`, `receta`.`ruta_img`, `cocina`.`nombre_cocina`, `categoria`.`nombre_categoria`
    FROM `receta`
	  LEFT JOIN `cocina` ON `receta`.`id_cocina` = `cocina`.`id_cocina`
	  LEFT JOIN `categoria` ON `receta`.`id_categoria` = `categoria`.`id_categoria`
    WHERE `receta`.`id_user` = 1');
    return view('receta_publica', ['listado'=>$productos]);
  }

  public function recetario_cat($id_categoria){
    $productos=DB::select('SELECT `receta`.`id_receta`, `receta`.`nombre_receta`, `receta`.`ruta_img`, `cocina`.`nombre_cocina`, `categoria`.`nombre_categoria`, `categoria`.`id_categoria`
    FROM `receta`
	  LEFT JOIN `cocina` ON `receta`.`id_cocina` = `cocina`.`id_cocina`
	  LEFT JOIN `categoria` ON `receta`.`id_categoria` = `categoria`.`id_categoria`
    WHERE `receta`.`id_categoria` = ?',[$id_categoria]);
    return view('receta', ['listado'=>$productos]);
  }

  public function insertar(Request $request){
        $this->validate($request, [
            'nombre_receta' => 'required',
            'ingredientes' => 'required',
            'procedimiento' => 'required',
        ]);

        $producto = new Receta;
        $producto->nombre_receta = $request->input('nombre_receta');
        $producto->ingredientes = $request->input('ingredientes');
        $producto->procedimiento = $request->input('procedimiento');

        $producto->autor = $request->input('autor');
        $producto->observaciones = $request->input('observaciones');
        $producto->id_categoria = $request->input('id_categoria');
        $producto->id_cocina = $request->input('id_cocina');
        $producto->id_user = $request->input('id_usuario');

        $image = $request->file('ruta_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);

        $producto->ruta_img = '/uploads/'.$name;

        $producto->save();
        return redirect('nueva-receta')->withSuccessMessage('Receta agregada exitosamente!');

    }

    public function update_receta(Request $request){

          $data =  array(
            'ingredientes' => $request->input('ingredientes'),
            'procedimiento' => $request->input('procedimiento'),
            'observaciones' => $request->input('observaciones'),
            'id_user' => $request->input('id_usuario'),
          );
          Receta::where('id_receta',$request->input('id_receta'))->update($data);

          return redirect('recetario')->withSuccessMessage('Receta agregada exitosamente!');

      }

    public function mostrar($id)
    {
      $receta = Receta::find($id);
      return view('mostrar', ['producto'=>$receta]);
    }

    public function mostrar_update($id)
    {
      $receta = Receta::find($id);
      return view('mostrar_update', ['producto'=>$receta]);
    }
}
