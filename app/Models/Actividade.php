<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividade
 *
 * @property $id
 * @property $nombre
 * @property $fecha_inicio
 * @property $fecha_termino
 * @property $encargado
 * @property $auditor
 * @property $energia_0
 * @property $dep_mecanico
 * @property $dep_electrico
 * @property $dep_operaciones
 * @property $estado
 * @property $equipo_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property UsersActividade[] $usersActividades
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividade extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fecha_inicio' => 'required',
		'equipo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'equipo_id',
        'user_id',

        'nombre',
        'fecha_inicio',
        'fecha_termino',
        'encargado',
        'auditor',

        'dep_mecanico',
        'dep_electrico',
        'dep_operaciones',

        'estado',

        'prueba_energia_e',
        'prueba_energia_m',
        'prueba_energia_o',

        

    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersActividades()
    {
        return $this->hasMany('App\Models\UsersActividade', 'actividad_id', 'id');
    }
    

}
