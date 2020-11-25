<?php

namespace App\Repositories;

use App\Models\actividades;
use App\Repositories\BaseRepository;

/**
 * Class actividadesRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:10 am UTC
*/

class actividadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'modalidad_semana',
        'empieza',
        'acaba',
        'cod_entrenadores'
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
        return actividades::class;
    }
}
