{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('template_title')
    Update Puntos Bloqueo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Puntos Bloqueo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('puntos-bloqueos.update', $puntosBloqueo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('puntos-bloqueo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
