@extends('adminlte::page')
@section('template_title')
    Terminar Actividad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <form method="POST" action=""  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('actividade.formTerminar')

                </form>

                {{-- <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Actividade</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('actividade.form')

                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
