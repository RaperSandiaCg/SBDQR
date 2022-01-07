{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
@section('template_title')
    {{ $actividade->name ?? 'Show Actividade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Actividade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actividades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $actividade->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $actividade->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Termino:</strong>
                            {{ $actividade->fecha_termino }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actividade->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $actividade->equipo_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
