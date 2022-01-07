{{-- @extends('layouts.app') --}}
{{-- @extends('adminlte::page')

@section('template_title')
    Actividade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Actividade') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('actividades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fecha Inicio</th>
										<th>Fecha Termino</th>
										<th>Estado</th>
										<th>Equipo Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actividades as $actividade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $actividade->nombre }}</td>
											<td>{{ $actividade->fecha_inicio }}</td>
											<td>{{ $actividade->fecha_termino }}</td>
											<td>{{ $actividade->estado }}</td>
											<td>{{ $actividade->equipo_id }}</td>

                                            <td>
                                                <form action="{{ route('actividades.destroy',$actividade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('actividades.show',$actividade->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('actividades.edit',$actividade->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $actividades->links() !!}
            </div>
        </div>
    </div>
@endsection --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="row d-flex justify-content-center">
    <div class="col-6 col-md-3">
        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Área</span>
                <span class="info-box-text text-center text-muted mb-0">Húmeda</span>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Equipo</span>
                <span class="info-box-text text-center text-muted mb-0">Chancador Primario</span>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="d-flex justify-content-center">
  <div class="col-md-6">
    {{-- Mes --}}
    <div class="card card-default ">
        <div class="card-header">
            <h3 class="card-title">Diciembre</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                        class="fas fa-remove"></i></button>
            </div>
        </div>

        <div class="card-body">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header " id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Del 29 al 5 de diciembre
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Del 6 al 12 de diciembre
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Del 13 al 19 de diciembre
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                Del 20 al 26 de diciembre
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="">
                          <div class="table-responsive">
                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <td>Lun 27</td>
                                        <td>08:00</td>
                                        <td>Mantención Motor</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                      <td>Lun 28</td>
                                      <td>20:00</td>
                                      <td>Mantención Motor</td>
                                      <td>
                                          <form action="" method="POST">
                                              <a class="btn btn-sm btn-primary " href=""><i
                                                      class="fa fa-fw fa-eye"></i> Ver Registro</a>
                                          </form>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-default ">
        <div class="card-header">
            <h3 class="card-title">Enero</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                        class="fas fa-remove"></i></button>
            </div>
        </div>

        <div class="card-body">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header " id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Del 27 al 2 de Enero
                            </button>
                        </h2>
                    </div>

                    <div id="collapse1" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table ">
                                    <tbody>
                                        <tr>
                                          <td>Lun 28</td>
                                          <td>20:00</td>
                                          <td>Mantención Motor</td>
                                          <td>
                                              <form action="" method="POST">
                                                  <a class="btn btn-sm btn-warning " href="">Terminar</a>
                                              </form>
                                          </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                aria-controls="collapse2">
                                Del 3 al 9 de Enero
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                aria-controls="collapse3">
                                Del 10 al 16 de Enero
                            </button>
                        </h2>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                aria-controls="collapse4">
                                Del 17 al 23 de Enero
                            </button>
                        </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- boton registro --}}
    <div class="float-right">
      <a href="{{ route('actividades.create') }}" class="btn btn-primary btn-sm"  data-placement="left">
        {{ __('Create New') }}
      </a>
    </div>
</div>


@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
