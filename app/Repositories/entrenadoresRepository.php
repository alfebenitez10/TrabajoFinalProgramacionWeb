<?php

namespace App\Repositories;

use App\Models\entrenadores;
use App\Repositories\BaseRepository;

/**
 * Class entrenadoresRepository
 * @package App\Repositories
 * @version October 30, 2020, 2:52 am UTC
*/

class entrenadoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'direccion',
        'telefono'
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
        return entrenadores::class;
    }
}
