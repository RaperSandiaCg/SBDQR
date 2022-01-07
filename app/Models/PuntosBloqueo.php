<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PuntosBloqueo
 *
 * @property $id
 * @property $tag
 * @property $nombre
 * @property $equipo_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PuntosBloqueo extends Model
{
    
    static $rules = [
		'tag' => 'required',
		'nombre' => 'required',
		'equipo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tag','nombre','equipo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipo_id');
    }
    

}
