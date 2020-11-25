<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateactividadesAPIRequest;
use App\Http\Requests\API\UpdateactividadesAPIRequest;
use App\Models\actividades;
use App\Repositories\actividadesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class actividadesController
 * @package App\Http\Controllers\API
 */

class actividadesAPIController extends AppBaseController
{
    /** @var  actividadesRepository */
    private $actividadesRepository;

    public function __construct(actividadesRepository $actividadesRepo)
    {
        $this->actividadesRepository = $actividadesRepo;
    }

    /**
     * Display a listing of the actividades.
     * GET|HEAD /actividades
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $actividades = $this->actividadesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($actividades->toArray(), 'Actividades retrieved successfully');
    }

    /**
     * Store a newly created actividades in storage.
     * POST /actividades
     *
     * @param CreateactividadesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateactividadesAPIRequest $request)
    {
        $input = $request->all();

        $actividades = $this->actividadesRepository->create($input);

        return $this->sendResponse($actividades->toArray(), 'Actividades saved successfully');
    }

    /**
     * Display the specified actividades.
     * GET|HEAD /actividades/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var actividades $actividades */
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            return $this->sendError('Actividades not found');
        }

        return $this->sendResponse($actividades->toArray(), 'Actividades retrieved successfully');
    }

    /**
     * Update the specified actividades in storage.
     * PUT/PATCH /actividades/{id}
     *
     * @param int $id
     * @param UpdateactividadesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateactividadesAPIRequest $request)
    {
        $input = $request->all();

        /** @var actividades $actividades */
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            return $this->sendError('Actividades not found');
        }

        $actividades = $this->actividadesRepository->update($input, $id);

        return $this->sendResponse($actividades->toArray(), 'actividades updated successfully');
    }

    /**
     * Remove the specified actividades from storage.
     * DELETE /actividades/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var actividades $actividades */
        $actividades = $this->actividadesRepository->find($id);

        if (empty($actividades)) {
            return $this->sendError('Actividades not found');
        }

        $actividades->delete();

        return $this->sendSuccess('Actividades deleted successfully');
    }
}
