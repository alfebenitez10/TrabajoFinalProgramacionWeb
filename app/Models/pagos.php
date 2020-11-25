<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class pagos
 * @package App\Models
 * @version October 30, 2020, 4:19 am UTC
 *
 * @property string $forma_pago
 */
class pagos extends Model
{

    public $table = 'pagos';
    



    public $fillable = [
        'forma_pago'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'forma_pago' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
