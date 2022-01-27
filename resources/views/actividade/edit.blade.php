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

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Actividade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividades.update', $actividad->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('actividade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
