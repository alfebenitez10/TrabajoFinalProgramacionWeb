<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateconfigEmpresaAPIRequest;
use App\Http\Requests\API\UpdateconfigEmpresaAPIRequest;
use App\Models\configEmpresa;
use App\Repositories\configEmpresaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class configEmpresaController
 * @package App\Http\Controllers\API
 */

class configEmpresaAPIController extends AppBaseController
{
    /** @var  configEmpresaRepository */
    private $configEmpresaRepository;

    public function __construct(configEmpresaRepository $configEmpresaRepo)
    {
        $this->configEmpresaRepository = $configEmpresaRepo;
    }

    /**
     * Display a listing of the configEmpresa.
     * GET|HEAD /configEmpresas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $configEmpresas = $this->configEmpresaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($configEmpresas->toArray(), 'Config Empresas retrieved successfully');
    }

    /**
     * Store a newly created configEmpresa in storage.
     * POST /configEmpresas
     *
     * @param CreateconfigEmpresaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateconfigEmpresaAPIRequest $request)
    {
        $input = $request->all();

        $configEmpresa = $this->configEmpresaRepository->create($input);

        return $this->sendResponse($configEmpresa->toArray(), 'Config Empresa saved successfully');
    }

    /**
     * Display the specified configEmpresa.
     * GET|HEAD /configEmpresas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var configEmpresa $configEmpresa */
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            return $this->sendError('Config Empresa not found');
        }

        return $this->sendResponse($configEmpresa->toArray(), 'Config Empresa retrieved successfully');
    }

    /**
     * Update the specified configEmpresa in storage.
     * PUT/PATCH /configEmpresas/{id}
     *
     * @param int $id
     * @param UpdateconfigEmpresaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateconfigEmpresaAPIRequest $request)
    {
        $input = $request->all();

        /** @var configEmpresa $configEmpresa */
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            return $this->sendError('Config Empresa not found');
        }

        $configEmpresa = $this->configEmpresaRepository->update($input, $id);

        return $this->sendResponse($configEmpresa->toArray(), 'configEmpresa updated successfully');
    }

    /**
     * Remove the specified configEmpresa from storage.
     * DELETE /configEmpresas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var configEmpresa $configEmpresa */
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            return $this->sendError('Config Empresa not found');
        }

        $configEmpresa->delete();

        return $this->sendSuccess('Config Empresa deleted successfully');
    }
}
