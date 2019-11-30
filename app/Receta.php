<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_receta
 * @property int $id_categoria
 * @property int $id_cocina
 * @property string $nombre_receta
 * @property string $ingredientes
 * @property string $procedimiento
 * @property string $autor
 * @property string $ruta_img
 * @property string $fecha_ingreso
 * @property string $observaciones
 * @property Categorium $categorium
 * @property Cocina $cocina
 */
class Receta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'receta';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_receta';

    /**
     * @var array
     */
    protected $fillable = ['id_categoria', 'id_cocina', 'nombre_receta', 'ingredientes', 'procedimiento', 'autor', 'ruta_img', 'fecha_ingreso', 'observaciones'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorium()
    {
        return $this->belongsTo('App\Categorium', 'id_categoria', 'id_categoria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cocina()
    {
        return $this->belongsTo('App\Cocina', 'id_cocina', 'id_cocina');
    }
    public $timestamps = false;
}
