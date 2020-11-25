<?php

namespace App\Repositories;

use App\Models\inscribir;
use App\Repositories\BaseRepository;

/**
 * Class inscribirRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:52 am UTC
*/

class inscribirRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_cliente',
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
        return inscribir::class;
    }
}
