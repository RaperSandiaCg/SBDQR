{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
@section('template_title')
    {{ $actividade->name ?? 'Show Actividade' }}
@endsection

@section('content')
    <section class="content container-fluid ">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Actividad</span>
                        </div>

                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_inicio)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $actividade->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Termino:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_termino)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actividade->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $actividade->equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{ $actividade->encargado()->nombreCompleto() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col-md-2 ">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Actividad</span>
                        </div>

                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_inicio)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $actividade->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Termino:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_termino)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actividade->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $actividade->equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{ $actividade->encargado()->nombreCompleto() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Actividad</span>
                        </div>

                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_inicio)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $actividade->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Termino:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_termino)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actividade->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $actividade->equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{ $actividade->encargado()->nombreCompleto() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Actividad</span>
                        </div>

                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_inicio)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $actividade->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Termino:</strong>
                            {{ Carbon\Carbon::parse($actividade->fecha_termino)->format('Y-m-d') }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actividade->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $actividade->equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{ $actividade->encargado()->nombreCompleto() }}
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-center">
            <div class="form-group col-md-6">
                {{-- <button type="button" class="btn btn-primary">
                    <a class="text-white" href="{{ route('actividades.edit',$actividade->id) }}" >Editar</a>

                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Ver imagen
                </button>
                <button type="button" class="btn btn-primary">
                    <a class="text-white" href="{{ route('actividades.index') }}" >Salir</a>
                </button> --}}

                <!-- Modal -->
                <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Libro de registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ url('storage/fotos/'.$actividade->equipo->nombre.'/'.$actividade->foto) }}" alt="" title="" width="100%"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenido">
            <input type="checkbox" id="btn-mas">
            <div class="redes">
                <a href="{{ route('actividades.edit',$actividade->id) }}" class="fas fa-edit">
                <a data-toggle="modal" data-target="#exampleModalCenter" class="fas fa-file-image"></a>
                <a href="{{ route('actividades.index') }}" class="fas fa-angle-left"></a>
            </div>
            
        </div>
    </section>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop