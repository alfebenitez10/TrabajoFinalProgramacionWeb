<li>
    <a href="{{ url('/') }}"><i class="fa fa-edit"></i><span>Inicio</span></a>
</li>

<li class="{{ Request::is('configEmpresas*') ? 'active' : '' }}">
    <a href="{{ route('configEmpresas.index') }}"><i class="fa fa-edit"></i><span>Config Empresas</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('entrenadores*') ? 'active' : '' }}">
    <a href="{{ route('entrenadores.index') }}"><i class="fa fa-edit"></i><span>Entrenadores</span></a>
</li>

<li class="{{ Request::is('maquinas*') ? 'active' : '' }}">
    <a href="{{ route('maquinas.index') }}"><i class="fa fa-edit"></i><span>Maquinas</span></a>
</li>

<li class="{{ Request::is('actividades*') ? 'active' : '' }}">
    <a href="{{ route('actividades.index') }}"><i class="fa fa-edit"></i><span>Actividades</span></a>
</li>

<li class="{{ Request::is('registros*') ? 'active' : '' }}">
    <a href="{{ route('registros.index') }}"><i class="fa fa-edit"></i><span>Registros</span></a>
</li>

<li class="{{ Request::is('inscribirs*') ? 'active' : '' }}">
    <a href="{{ route('inscribirs.index') }}"><i class="fa fa-edit"></i><span>Inscribirs</span></a>
</li>

<li class="{{ Request::is('realizars*') ? 'active' : '' }}">
    <a href="{{ route('realizars.index') }}"><i class="fa fa-edit"></i><span>Realizars</span></a>
</li>

<li class="{{ Request::is('pagos*') ? 'active' : '' }}">
    <a href="{{ route('pagos.index') }}"><i class="fa fa-edit"></i><span>Pagos</span></a>
</li>

