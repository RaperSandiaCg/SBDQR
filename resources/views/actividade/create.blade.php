{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
@section('template_title')
    Create Actividade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-3">

                @includeif('partials.errors')

                {{-- <form method="POST" action="{{ route('actividades.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('actividade.form')

                </form> --}}

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Ingresar Actividadad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('actividade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
