<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class realizar
 * @package App\Models
 * @version October 30, 2020, 4:17 am UTC
 *
 * @property \App\Models\registros $id
 * @property \Illuminate\Database\Eloquent\Collection $actividades
 * @property integer $cod_registro
 * @property integer $cod_actividad
 */
class realizar extends Model
{

    public $table = 'realizar';
    



    public $fillable = [
        'cod_registro',
        'cod_actividad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cod_registro' => 'integer',
        'cod_actividad' => 'integer'
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
        return $this->belongsTo(\App\Models\registros::class, 'id', 'cod_registro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function actividades()
    {
        return $this->hasMany(\App\Models\actividades::class, 'id', 'cod_actividad');
    }
}
