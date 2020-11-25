<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class configEmpresa
 * @package App\Models
 * @version October 29, 2020, 11:17 pm UTC
 *
 * @property integer $nit
 * @property string $nombre
 * @property integer $telefono
 * @property string $direccion
 * @property string $logo
 */
class configEmpresa extends Model
{

    public $table = 'configEmpresa';
    



    public $fillable = [
        'nit',
        'nombre',
        'telefono',
        'direccion',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nit' => 'integer',
        'nombre' => 'string',
        'telefono' => 'integer',
        'direccion' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
