<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateinscribirAPIRequest;
use App\Http\Requests\API\UpdateinscribirAPIRequest;
use App\Models\inscribir;
use App\Repositories\inscribirRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class inscribirController
 * @package App\Http\Controllers\API
 */

class inscribirAPIController extends AppBaseController
{
    /** @var  inscribirRepository */
    private $inscribirRepository;

    public function __construct(inscribirRepository $inscribirRepo)
    {
        $this->inscribirRepository = $inscribirRepo;
    }

    /**
     * Display a listing of the inscribir.
     * GET|HEAD /inscribirs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $inscribirs = $this->inscribirRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($inscribirs->toArray(), 'Inscribirs retrieved successfully');
    }

    /**
     * Store a newly created inscribir in storage.
     * POST /inscribirs
     *
     * @param CreateinscribirAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateinscribirAPIRequest $request)
    {
        $input = $request->all();

        $inscribir = $this->inscribirRepository->create($input);

        return $this->sendResponse($inscribir->toArray(), 'Inscribir saved successfully');
    }

    /**
     * Display the specified inscribir.
     * GET|HEAD /inscribirs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var inscribir $inscribir */
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            return $this->sendError('Inscribir not found');
        }

        return $this->sendResponse($inscribir->toArray(), 'Inscribir retrieved successfully');
    }

    /**
     * Update the specified inscribir in storage.
     * PUT/PATCH /inscribirs/{id}
     *
     * @param int $id
     * @param UpdateinscribirAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinscribirAPIRequest $request)
    {
        $input = $request->all();

        /** @var inscribir $inscribir */
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            return $this->sendError('Inscribir not found');
        }

        $inscribir = $this->inscribirRepository->update($input, $id);

        return $this->sendResponse($inscribir->toArray(), 'inscribir updated successfully');
    }

    /**
     * Remove the specified inscribir from storage.
     * DELETE /inscribirs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var inscribir $inscribir */
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            return $this->sendError('Inscribir not found');
        }

        $inscribir->delete();

        return $this->sendSuccess('Inscribir deleted successfully');
    }
}
