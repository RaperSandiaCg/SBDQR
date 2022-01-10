@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            {{-- Mes --}}
            <div class="card card-default ">
                <div class="card-header">
                    <h3 class="card-title">Selecciona los datos</h3>

                </div>
    
                <div class="card-body">
                    <div class="col-sm-12">
                        <!-- select -->
                        <div class="form-group">
                          <label>Area</label>
                          <select class="custom-select">
                            <option>Cal</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <!-- select -->
                        <div class="form-group">
                          <label>Equipo</label>
                          <select class="custom-select">
                            <option>Equipo 1</option>
                            <option>Equipo 2</option>
                            <option>Equipo 3</option>
                            <option>Equipo 4</option>
                            <option>Equipo 5</option>
                          </select>
                        </div>
                    </div>

                </div>
            </div>
            {{-- boton registro --}}
            <div class="float-right">
                <a href="vista" class="btn btn-primary btn-sm" data-placement="left">
                    {{ __('Buscar Actividades') }}
                </a>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

