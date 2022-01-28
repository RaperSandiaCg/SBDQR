{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
@section('template_title')
    Terminar Actividad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-3">

                @includeif('partials.errors')
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    </div>        
                @endif 
                <div class="card card-success">
                    <div class="card-header">
                        <span class="card-title">Terminar Actividade</span>
                    </div>
                    <form method="POST" action="{{ route('actividades.update', $actividad->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    <div class="card-body"> 
                    @csrf
                    @include('actividade.form')
                    </div>
                    <div class="card-footer"> 
                        <button type="submit" class="btn btn-success ">Finalizar</button>  
                    </div>
                </form>                
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@stop