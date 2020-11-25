<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterealizarAPIRequest;
use App\Http\Requests\API\UpdaterealizarAPIRequest;
use App\Models\realizar;
use App\Repositories\realizarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class realizarController
 * @package App\Http\Controllers\API
 */

class realizarAPIController extends AppBaseController
{
    /** @var  realizarRepository */
    private $realizarRepository;

    public function __construct(realizarRepository $realizarRepo)
    {
        $this->realizarRepository = $realizarRepo;
    }

    /**
     * Display a listing of the realizar.
     * GET|HEAD /realizars
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $realizars = $this->realizarRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($realizars->toArray(), 'Realizars retrieved successfully');
    }

    /**
     * Store a newly created realizar in storage.
     * POST /realizars
     *
     * @param CreaterealizarAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterealizarAPIRequest $request)
    {
        $input = $request->all();

        $realizar = $this->realizarRepository->create($input);

        return $this->sendResponse($realizar->toArray(), 'Realizar saved successfully');
    }

    /**
     * Display the specified realizar.
     * GET|HEAD /realizars/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var realizar $realizar */
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            return $this->sendError('Realizar not found');
        }

        return $this->sendResponse($realizar->toArray(), 'Realizar retrieved successfully');
    }

    /**
     * Update the specified realizar in storage.
     * PUT/PATCH /realizars/{id}
     *
     * @param int $id
     * @param UpdaterealizarAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterealizarAPIRequest $request)
    {
        $input = $request->all();

        /** @var realizar $realizar */
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            return $this->sendError('Realizar not found');
        }

        $realizar = $this->realizarRepository->update($input, $id);

        return $this->sendResponse($realizar->toArray(), 'realizar updated successfully');
    }

    /**
     * Remove the specified realizar from storage.
     * DELETE /realizars/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var realizar $realizar */
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            return $this->sendError('Realizar not found');
        }

        $realizar->delete();

        return $this->sendSuccess('Realizar deleted successfully');
    }
}
