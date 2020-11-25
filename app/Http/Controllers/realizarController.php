<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterealizarRequest;
use App\Http\Requests\UpdaterealizarRequest;
use App\Repositories\realizarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class realizarController extends AppBaseController
{
    /** @var  realizarRepository */
    private $realizarRepository;

    public function __construct(realizarRepository $realizarRepo)
    {
        $this->realizarRepository = $realizarRepo;
    }

    /**
     * Display a listing of the realizar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $realizars = $this->realizarRepository->paginate(10);

        return view('realizars.index')
            ->with('realizars', $realizars);
    }

    /**
     * Show the form for creating a new realizar.
     *
     * @return Response
     */
    public function create()
    {
        return view('realizars.create');
    }

    /**
     * Store a newly created realizar in storage.
     *
     * @param CreaterealizarRequest $request
     *
     * @return Response
     */
    public function store(CreaterealizarRequest $request)
    {
        $input = $request->all();

        $realizar = $this->realizarRepository->create($input);

        Flash::success('Realizar saved successfully.');

        return redirect(route('realizars.index'));
    }

    /**
     * Display the specified realizar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            Flash::error('Realizar not found');

            return redirect(route('realizars.index'));
        }

        return view('realizars.show')->with('realizar', $realizar);
    }

    /**
     * Show the form for editing the specified realizar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            Flash::error('Realizar not found');

            return redirect(route('realizars.index'));
        }

        return view('realizars.edit')->with('realizar', $realizar);
    }

    /**
     * Update the specified realizar in storage.
     *
     * @param int $id
     * @param UpdaterealizarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterealizarRequest $request)
    {
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            Flash::error('Realizar not found');

            return redirect(route('realizars.index'));
        }

        $realizar = $this->realizarRepository->update($request->all(), $id);

        Flash::success('Realizar updated successfully.');

        return redirect(route('realizars.index'));
    }

    /**
     * Remove the specified realizar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $realizar = $this->realizarRepository->find($id);

        if (empty($realizar)) {
            Flash::error('Realizar not found');

            return redirect(route('realizars.index'));
        }

        $this->realizarRepository->delete($id);

        Flash::success('Realizar deleted successfully.');

        return redirect(route('realizars.index'));
    }
}
