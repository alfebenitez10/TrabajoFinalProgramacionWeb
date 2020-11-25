<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class registros
 * @package App\Models
 * @version October 30, 2020, 3:22 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 * @property string $hora_entrada
 * @property string $hora_salida
 * @property integer $id_cliente
 */
class registros extends Model
{

    public $table = 'registros';
    



    public $fillable = [
        'hora_entrada',
        'hora_salida',
        'id_cliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hora_entrada' => 'date',
        'hora_salida' => 'date',
        'id_cliente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\clientes::class, 'id', 'id_cliente');
    }
}
