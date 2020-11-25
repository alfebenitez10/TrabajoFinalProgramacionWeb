<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemaquinasRequest;
use App\Http\Requests\UpdatemaquinasRequest;
use App\Repositories\maquinasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class maquinasController extends AppBaseController
{
    /** @var  maquinasRepository */
    private $maquinasRepository;

    public function __construct(maquinasRepository $maquinasRepo)
    {
        $this->maquinasRepository = $maquinasRepo;
    }

    /**
     * Display a listing of the maquinas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $maquinas = $this->maquinasRepository->paginate(10);

        return view('maquinas.index')
            ->with('maquinas', $maquinas);
    }

    /**
     * Show the form for creating a new maquinas.
     *
     * @return Response
     */
    public function create()
    {
        return view('maquinas.create');
    }

    /**
     * Store a newly created maquinas in storage.
     *
     * @param CreatemaquinasRequest $request
     *
     * @return Response
     */
    public function store(CreatemaquinasRequest $request)
    {
        $input = $request->all();

        $maquinas = $this->maquinasRepository->create($input);

        Flash::success('Maquinas saved successfully.');

        return redirect(route('maquinas.index'));
    }

    /**
     * Display the specified maquinas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            Flash::error('Maquinas not found');

            return redirect(route('maquinas.index'));
        }

        return view('maquinas.show')->with('maquinas', $maquinas);
    }

    /**
     * Show the form for editing the specified maquinas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            Flash::error('Maquinas not found');

            return redirect(route('maquinas.index'));
        }

        return view('maquinas.edit')->with('maquinas', $maquinas);
    }

    /**
     * Update the specified maquinas in storage.
     *
     * @param int $id
     * @param UpdatemaquinasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemaquinasRequest $request)
    {
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            Flash::error('Maquinas not found');

            return redirect(route('maquinas.index'));
        }

        $maquinas = $this->maquinasRepository->update($request->all(), $id);

        Flash::success('Maquinas updated successfully.');

        return redirect(route('maquinas.index'));
    }

    /**
     * Remove the specified maquinas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $maquinas = $this->maquinasRepository->find($id);

        if (empty($maquinas)) {
            Flash::error('Maquinas not found');

            return redirect(route('maquinas.index'));
        }

        $this->maquinasRepository->delete($id);

        Flash::success('Maquinas deleted successfully.');

        return redirect(route('maquinas.index'));
    }
}
