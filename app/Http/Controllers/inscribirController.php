<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinscribirRequest;
use App\Http\Requests\UpdateinscribirRequest;
use App\Repositories\inscribirRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class inscribirController extends AppBaseController
{
    /** @var  inscribirRepository */
    private $inscribirRepository;

    public function __construct(inscribirRepository $inscribirRepo)
    {
        $this->inscribirRepository = $inscribirRepo;
    }

    /**
     * Display a listing of the inscribir.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inscribirs = $this->inscribirRepository->paginate(10);

        return view('inscribirs.index')
            ->with('inscribirs', $inscribirs);
    }

    /**
     * Show the form for creating a new inscribir.
     *
     * @return Response
     */
    public function create()
    {
        return view('inscribirs.create');
    }

    /**
     * Store a newly created inscribir in storage.
     *
     * @param CreateinscribirRequest $request
     *
     * @return Response
     */
    public function store(CreateinscribirRequest $request)
    {
        $input = $request->all();

        $inscribir = $this->inscribirRepository->create($input);

        Flash::success('Inscribir saved successfully.');

        return redirect(route('inscribirs.index'));
    }

    /**
     * Display the specified inscribir.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            Flash::error('Inscribir not found');

            return redirect(route('inscribirs.index'));
        }

        return view('inscribirs.show')->with('inscribir', $inscribir);
    }

    /**
     * Show the form for editing the specified inscribir.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            Flash::error('Inscribir not found');

            return redirect(route('inscribirs.index'));
        }

        return view('inscribirs.edit')->with('inscribir', $inscribir);
    }

    /**
     * Update the specified inscribir in storage.
     *
     * @param int $id
     * @param UpdateinscribirRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinscribirRequest $request)
    {
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            Flash::error('Inscribir not found');

            return redirect(route('inscribirs.index'));
        }

        $inscribir = $this->inscribirRepository->update($request->all(), $id);

        Flash::success('Inscribir updated successfully.');

        return redirect(route('inscribirs.index'));
    }

    /**
     * Remove the specified inscribir from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inscribir = $this->inscribirRepository->find($id);

        if (empty($inscribir)) {
            Flash::error('Inscribir not found');

            return redirect(route('inscribirs.index'));
        }

        $this->inscribirRepository->delete($id);

        Flash::success('Inscribir deleted successfully.');

        return redirect(route('inscribirs.index'));
    }
}
