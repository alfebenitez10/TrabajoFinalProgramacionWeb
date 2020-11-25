<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateentrenadoresRequest;
use App\Http\Requests\UpdateentrenadoresRequest;
use App\Repositories\entrenadoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class entrenadoresController extends AppBaseController
{
    /** @var  entrenadoresRepository */
    private $entrenadoresRepository;

    public function __construct(entrenadoresRepository $entrenadoresRepo)
    {
        $this->entrenadoresRepository = $entrenadoresRepo;
    }

    /**
     * Display a listing of the entrenadores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $entrenadores = $this->entrenadoresRepository->paginate(10);

        return view('entrenadores.index')
            ->with('entrenadores', $entrenadores);
    }

    /**
     * Show the form for creating a new entrenadores.
     *
     * @return Response
     */
    public function create()
    {
        return view('entrenadores.create');
    }

    /**
     * Store a newly created entrenadores in storage.
     *
     * @param CreateentrenadoresRequest $request
     *
     * @return Response
     */
    public function store(CreateentrenadoresRequest $request)
    {
        $input = $request->all();

        $entrenadores = $this->entrenadoresRepository->create($input);

        Flash::success('Entrenadores saved successfully.');

        return redirect(route('entrenadores.index'));
    }

    /**
     * Display the specified entrenadores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            Flash::error('Entrenadores not found');

            return redirect(route('entrenadores.index'));
        }

        return view('entrenadores.show')->with('entrenadores', $entrenadores);
    }

    /**
     * Show the form for editing the specified entrenadores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            Flash::error('Entrenadores not found');

            return redirect(route('entrenadores.index'));
        }

        return view('entrenadores.edit')->with('entrenadores', $entrenadores);
    }

    /**
     * Update the specified entrenadores in storage.
     *
     * @param int $id
     * @param UpdateentrenadoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateentrenadoresRequest $request)
    {
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            Flash::error('Entrenadores not found');

            return redirect(route('entrenadores.index'));
        }

        $entrenadores = $this->entrenadoresRepository->update($request->all(), $id);

        Flash::success('Entrenadores updated successfully.');

        return redirect(route('entrenadores.index'));
    }

    /**
     * Remove the specified entrenadores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entrenadores = $this->entrenadoresRepository->find($id);

        if (empty($entrenadores)) {
            Flash::error('Entrenadores not found');

            return redirect(route('entrenadores.index'));
        }

        $this->entrenadoresRepository->delete($id);

        Flash::success('Entrenadores deleted successfully.');

        return redirect(route('entrenadores.index'));
    }
}
