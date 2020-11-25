<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class actividades
 * @package App\Models
 * @version October 30, 2020, 3:10 am UTC
 *
 * @property \App\Models\entrenadores $entrenadores
 * @property string $nombre
 * @property string $modalidad_semana
 * @property string $empieza
 * @property string $acaba
 * @property string $cod_entrenadores
 */
class actividades extends Model
{

    public $table = 'actividades';
    



    public $fillable = [
        'nombre',
        'modalidad_semana',
        'empieza',
        'acaba',
        'cod_entrenadores'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'modalidad_semana' => 'string',
        'empieza' => 'string',
        'acaba' => 'string',
        'cod_entrenadores' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function entrenadores()
    {
        return $this->hasOne(\App\Models\entrenadores::class, 'id', 'cod_entrenadores');
    }
}
