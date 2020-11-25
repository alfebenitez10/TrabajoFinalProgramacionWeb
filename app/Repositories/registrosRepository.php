<?php

namespace App\Repositories;

use App\Models\registros;
use App\Repositories\BaseRepository;

/**
 * Class registrosRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:22 am UTC
*/

class registrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hora_entrada',
        'hora_salida',
        'id_cliente'
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
        return registros::class;
    }
}
