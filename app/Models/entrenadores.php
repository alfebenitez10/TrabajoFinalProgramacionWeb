<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class entrenadores
 * @package App\Models
 * @version October 30, 2020, 2:52 am UTC
 *
 * @property string $nombre
 * @property string $apellidos
 * @property string $direccion
 * @property integer $telefono
 */
class entrenadores extends Model
{

    public $table = 'entrenadores';
    



    public $fillable = [
        'nombre',
        'apellidos',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellidos' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
