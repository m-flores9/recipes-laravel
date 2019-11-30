<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_categoria
 * @property string $nombre_categoria
 * @property Recetum[] $recetas
 */
class Categoria extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categoria';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_categoria';

    /**
     * @var array
     */
    protected $fillable = ['nombre_categoria'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Recetum', 'id_categoria', 'id_categoria');
    }
    public $timestamps = false;
}
