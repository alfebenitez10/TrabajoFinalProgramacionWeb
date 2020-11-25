<?php

namespace App\Repositories;

use App\Models\pagos;
use App\Repositories\BaseRepository;

/**
 * Class pagosRepository
 * @package App\Repositories
 * @version October 30, 2020, 4:19 am UTC
*/

class pagosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'forma_pago'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pagos::class;
    }
}
