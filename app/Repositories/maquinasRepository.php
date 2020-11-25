<?php

namespace App\Repositories;

use App\Models\maquinas;
use App\Repositories\BaseRepository;

/**
 * Class maquinasRepository
 * @package App\Repositories
 * @version October 30, 2020, 2:56 am UTC
*/

class maquinasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'marca',
        'tipo_de_maquina',
        'funcion',
        'estado'
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
        return maquinas::class;
    }
}
