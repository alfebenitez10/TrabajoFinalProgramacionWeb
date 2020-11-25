<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class maquinas
 * @package App\Models
 * @version October 30, 2020, 2:56 am UTC
 *
 * @property string $nombre
 * @property string $marca
 * @property string $tipo_de_maquina
 * @property string $funcion
 * @property string $estado
 */
class maquinas extends Model
{

    public $table = 'maquinas';
    



    public $fillable = [
        'nombre',
        'marca',
        'tipo_de_maquina',
        'funcion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'marca' => 'string',
        'tipo_de_maquina' => 'string',
        'funcion' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
