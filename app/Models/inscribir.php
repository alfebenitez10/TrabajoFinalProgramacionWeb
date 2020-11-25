<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class inscribir
 * @package App\Models
 * @version October 30, 2020, 3:52 am UTC
 *
 * @property \App\Models\clientes $id
 * @property \Illuminate\Database\Eloquent\Collection $actividades
 * @property string $cod_cliente
 * @property string $cod_actividad
 */
class inscribir extends Model
{

    public $table = 'inscribir';
    



    public $fillable = [
        'cod_cliente',
        'cod_actividad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cod_cliente' => 'string',
        'cod_actividad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\clientes::class, 'id', 'cod_cliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function actividades()
    {
        return $this->hasMany(\App\Models\actividades::class, 'id', 'cod_actividad');
    }
}
