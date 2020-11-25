<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateconfigEmpresaRequest;
use App\Http\Requests\UpdateconfigEmpresaRequest;
use App\Repositories\configEmpresaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class configEmpresaController extends AppBaseController
{
    /** @var  configEmpresaRepository */
    private $configEmpresaRepository;

    public function __construct(configEmpresaRepository $configEmpresaRepo)
    {
        $this->configEmpresaRepository = $configEmpresaRepo;
    }

    /**
     * Display a listing of the configEmpresa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $configEmpresas = $this->configEmpresaRepository->paginate(10);

        return view('config_empresas.index')
            ->with('configEmpresas', $configEmpresas);
    }

    /**
     * Show the form for creating a new configEmpresa.
     *
     * @return Response
     */
    public function create()
    {
        return view('config_empresas.create');
    }

    /**
     * Store a newly created configEmpresa in storage.
     *
     * @param CreateconfigEmpresaRequest $request
     *
     * @return Response
     */
    public function store(CreateconfigEmpresaRequest $request)
    {
        $input = $request->all();

        $configEmpresa = $this->configEmpresaRepository->create($input);

        Flash::success('Config Empresa saved successfully.');

        return redirect(route('configEmpresas.index'));
    }

    /**
     * Display the specified configEmpresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        return view('config_empresas.show')->with('configEmpresa', $configEmpresa);
    }

    /**
     * Show the form for editing the specified configEmpresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        return view('config_empresas.edit')->with('configEmpresa', $configEmpresa);
    }

    /**
     * Update the specified configEmpresa in storage.
     *
     * @param int $id
     * @param UpdateconfigEmpresaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateconfigEmpresaRequest $request)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        $configEmpresa = $this->configEmpresaRepository->update($request->all(), $id);

        Flash::success('Config Empresa updated successfully.');

        return redirect(route('configEmpresas.index'));
    }

    /**
     * Remove the specified configEmpresa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $configEmpresa = $this->configEmpresaRepository->find($id);

        if (empty($configEmpresa)) {
            Flash::error('Config Empresa not found');

            return redirect(route('configEmpresas.index'));
        }

        $this->configEmpresaRepository->delete($id);

        Flash::success('Config Empresa deleted successfully.');

        return redirect(route('configEmpresas.index'));
    }
}
