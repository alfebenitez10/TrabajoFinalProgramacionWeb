<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateregistrosAPIRequest;
use App\Http\Requests\API\UpdateregistrosAPIRequest;
use App\Models\registros;
use App\Repositories\registrosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class registrosController
 * @package App\Http\Controllers\API
 */

class registrosAPIController extends AppBaseController
{
    /** @var  registrosRepository */
    private $registrosRepository;

    public function __construct(registrosRepository $registrosRepo)
    {
        $this->registrosRepository = $registrosRepo;
    }

    /**
     * Display a listing of the registros.
     * GET|HEAD /registros
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $registros = $this->registrosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($registros->toArray(), 'Registros retrieved successfully');
    }

    /**
     * Store a newly created registros in storage.
     * POST /registros
     *
     * @param CreateregistrosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateregistrosAPIRequest $request)
    {
        $input = $request->all();

        $registros = $this->registrosRepository->create($input);

        return $this->sendResponse($registros->toArray(), 'Registros saved successfully');
    }

    /**
     * Display the specified registros.
     * GET|HEAD /registros/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var registros $registros */
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            return $this->sendError('Registros not found');
        }

        return $this->sendResponse($registros->toArray(), 'Registros retrieved successfully');
    }

    /**
     * Update the specified registros in storage.
     * PUT/PATCH /registros/{id}
     *
     * @param int $id
     * @param UpdateregistrosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateregistrosAPIRequest $request)
    {
        $input = $request->all();

        /** @var registros $registros */
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            return $this->sendError('Registros not found');
        }

        $registros = $this->registrosRepository->update($input, $id);

        return $this->sendResponse($registros->toArray(), 'registros updated successfully');
    }

    /**
     * Remove the specified registros from storage.
     * DELETE /registros/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var registros $registros */
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            return $this->sendError('Registros not found');
        }

        $registros->delete();

        return $this->sendSuccess('Registros deleted successfully');
    }
}
