<?php

namespace App\Repositories;

use App\Models\configEmpresa;
use App\Repositories\BaseRepository;

/**
 * Class configEmpresaRepository
 * @package App\Repositories
 * @version October 29, 2020, 11:17 pm UTC
*/

class configEmpresaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nit',
        'nombre',
        'telefono',
        'direccion',
        'logo'
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
        return configEmpresa::class;
    }
}
