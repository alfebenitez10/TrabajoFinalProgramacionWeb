@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Realizar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($realizar, ['route' => ['realizars.update', $realizar->id], 'method' => 'patch']) !!}

                        @include('realizars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection