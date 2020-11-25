<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateregistrosRequest;
use App\Http\Requests\UpdateregistrosRequest;
use App\Repositories\registrosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class registrosController extends AppBaseController
{
    /** @var  registrosRepository */
    private $registrosRepository;

    public function __construct(registrosRepository $registrosRepo)
    {
        $this->registrosRepository = $registrosRepo;
    }

    /**
     * Display a listing of the registros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $registros = $this->registrosRepository->paginate(10);

        return view('registros.index')
            ->with('registros', $registros);
    }

    /**
     * Show the form for creating a new registros.
     *
     * @return Response
     */
    public function create()
    {
        return view('registros.create');
    }

    /**
     * Store a newly created registros in storage.
     *
     * @param CreateregistrosRequest $request
     *
     * @return Response
     */
    public function store(CreateregistrosRequest $request)
    {
        $input = $request->all();

        $registros = $this->registrosRepository->create($input);

        Flash::success('Registros saved successfully.');

        return redirect(route('registros.index'));
    }

    /**
     * Display the specified registros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        return view('registros.show')->with('registros', $registros);
    }

    /**
     * Show the form for editing the specified registros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        return view('registros.edit')->with('registros', $registros);
    }

    /**
     * Update the specified registros in storage.
     *
     * @param int $id
     * @param UpdateregistrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateregistrosRequest $request)
    {
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        $registros = $this->registrosRepository->update($request->all(), $id);

        Flash::success('Registros updated successfully.');

        return redirect(route('registros.index'));
    }

    /**
     * Remove the specified registros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registros = $this->registrosRepository->find($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        $this->registrosRepository->delete($id);

        Flash::success('Registros deleted successfully.');

        return redirect(route('registros.index'));
    }
}
