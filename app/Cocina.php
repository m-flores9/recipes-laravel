<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cocina
 * @property string $nombre_cocina
 * @property Recetum[] $recetas
 */
class Cocina extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cocina';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_cocina';

    /**
     * @var array
     */
    protected $fillable = ['nombre_cocina'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Recetum', 'id_cocina', 'id_cocina');
    }
    public $timestamps = false;
}
