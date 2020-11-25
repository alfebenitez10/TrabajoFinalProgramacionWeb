<?php

namespace App\Repositories;

use App\Models\realizar;
use App\Repositories\BaseRepository;

/**
 * Class realizarRepository
 * @package App\Repositories
 * @version October 30, 2020, 4:17 am UTC
*/

class realizarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_registro',
        'cod_actividad'
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
        return realizar::class;
    }
}
