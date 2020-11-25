@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entrenadores
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'entrenadores.store']) !!}

                        @include('entrenadores.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
