@extends('layouts.app')

@section('template_title')
    {{ $puntosBloqueo->name ?? 'Show Puntos Bloqueo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Puntos Bloqueo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('puntos-bloqueos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tag:</strong>
                            {{ $puntosBloqueo->tag }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $puntosBloqueo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $puntosBloqueo->equipo_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
