<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class clientes
 * @package App\Models
 * @version October 29, 2020, 11:50 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 */
class clientes extends Model
{

    public $table = 'clientes';
    



    public $fillable = [
        'nombre',
        'apellido',
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
        'apellido' => 'string',
        'direccion' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
