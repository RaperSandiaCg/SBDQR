{{-- @extends('layouts.app') --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            {{-- Mes --}}
            <form name="add-blog-post-form"  method="get" action="{{ route('actividades.index') }}">

            <div class="card card-default ">
                <div class="card-header">
                    <h3 class="card-title">Selecciona los datos</h3>
                </div>
                    {{csrf_field()}}
              
                    <div class="card-body">
                        <div class="col-sm-12">
                            <!-- select -->
                            <div class="form-group">
                            <label>Area</label>
                            <select name="area" class="custom-select">
                                @foreach ($areas as $area)
                                    <option value="{{$area}}" >{{$area->nombre}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- select -->
                            <div class="form-group">
                            <label>Equipo</label>
                            <select name="equipo" class="custom-select">
                                @foreach ($equipos as $equipo)
                                    <option value="{{$equipo}}">{{$equipo->nombre}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                    </div>
            </div>
            {{-- boton registro --}}
            <div class="float-right">
                <button type="submit" class="btn btn-primary">Buscar Actividades</button>
            </div>

            </form>

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


