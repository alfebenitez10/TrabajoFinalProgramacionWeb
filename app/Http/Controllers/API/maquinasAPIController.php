<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatemaquinasAPIRequest;
use App\Http\Requests\API\UpdatemaquinasAPIRequest;
use App\Models\maquinas;
use App\Repositories\maquinasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class maquinasController
 * @package App\Http\Controllers\API
 */

class maquinasAPIController extends AppBaseController
{
    /** @var  maquinasRepository */
    private $maquinasRepository;

    public function __construct(maquinasRepository $maquinasRepo)
    {
        $this->maquinasRepository = $maquinasRepo;
    }

    /**
     * Display a listing of the maquinas.
     * GET|HEAD /maquinas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $maquinas = $this->maquinasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($maquinas->toArray(), 'Maquinas retrieved successfully');
    }

    /**
     * Store a newly created maquinas in storage.
     * POST /maquinas
     *
     * @param CreatemaquinasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatemaquinasAPIRequest $request)
    {
        $input = $request->all();

        $maquinas = $this->maquinasRepository->create($input);

        return $this->sendResponse($maquinas->toArray(), 'Maquinas saved successfully');
    }

    /**
     * Display the specified maquinas.
     * GET|HEAD /maquinas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var maquinas $maquinas */
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            return $this->sendError('Maquinas not found');
        }

        return $this->sendResponse($maquinas->toArray(), 'Maquinas retrieved successfully');
    }

    /**
     * Update the specified maquinas in storage.
     * PUT/PATCH /maquinas/{id}
     *
     * @param int $id
     * @param UpdatemaquinasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemaquinasAPIRequest $request)
    {
        $input = $request->all();

        /** @var maquinas $maquinas */
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            return $this->sendError('Maquinas not found');
        }

        $maquinas = $this->maquinasRepository->update($input, $id);

        return $this->sendResponse($maquinas->toArray(), 'maquinas updated successfully');
    }

    /**
     * Remove the specified maquinas from storage.
     * DELETE /maquinas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var maquinas $maquinas */
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            return $this->sendError('Maquinas not found');
        }

        $maquinas->delete();

        return $this->sendSuccess('Maquinas deleted successfully');
    }
}
