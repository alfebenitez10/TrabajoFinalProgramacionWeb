<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateentrenadoresAPIRequest;
use App\Http\Requests\API\UpdateentrenadoresAPIRequest;
use App\Models\entrenadores;
use App\Repositories\entrenadoresRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class entrenadoresController
 * @package App\Http\Controllers\API
 */

class entrenadoresAPIController extends AppBaseController
{
    /** @var  entrenadoresRepository */
    private $entrenadoresRepository;

    public function __construct(entrenadoresRepository $entrenadoresRepo)
    {
        $this->entrenadoresRepository = $entrenadoresRepo;
    }

    /**
     * Display a listing of the entrenadores.
     * GET|HEAD /entrenadores
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $entrenadores = $this->entrenadoresRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($entrenadores->toArray(), 'Entrenadores retrieved successfully');
    }

    /**
     * Store a newly created entrenadores in storage.
     * POST /entrenadores
     *
     * @param CreateentrenadoresAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateentrenadoresAPIRequest $request)
    {
        $input = $request->all();

        $entrenadores = $this->entrenadoresRepository->create($input);

        return $this->sendResponse($entrenadores->toArray(), 'Entrenadores saved successfully');
    }

    /**
     * Display the specified entrenadores.
     * GET|HEAD /entrenadores/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var entrenadores $entrenadores */
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            return $this->sendError('Entrenadores not found');
        }

        return $this->sendResponse($entrenadores->toArray(), 'Entrenadores retrieved successfully');
    }

    /**
     * Update the specified entrenadores in storage.
     * PUT/PATCH /entrenadores/{id}
     *
     * @param int $id
     * @param UpdateentrenadoresAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateentrenadoresAPIRequest $request)
    {
        $input = $request->all();

        /** @var entrenadores $entrenadores */
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            return $this->sendError('Entrenadores not found');
        }

        $entrenadores = $this->entrenadoresRepository->update($input, $id);

        return $this->sendResponse($entrenadores->toArray(), 'entrenadores updated successfully');
    }

    /**
     * Remove the specified entrenadores from storage.
     * DELETE /entrenadores/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var entrenadores $entrenadores */
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            return $this->sendError('Entrenadores not found');
        }

        $entrenadores->delete();

        return $this->sendSuccess('Entrenadores deleted successfully');
    }
}
