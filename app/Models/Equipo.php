<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $tag
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade[] $actividades
 * @property AreasEquipo[] $areasEquipos
 * @property PuntosBloqueo[] $puntosBloqueos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'tag' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tag','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividades()
    {
        return $this->hasMany('App\Models\Actividade', 'equipo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areasEquipos()
    {
        return $this->hasMany('App\Models\AreasEquipo', 'equipo_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->BelongsToMaby('App\Models\Area');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function puntosBloqueos()
    {
        return $this->hasMany('App\Models\PuntosBloqueo', 'equipo_id', 'id');
    }
    

}
