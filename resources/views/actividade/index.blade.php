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
                <span class="info-box-text text-center text-muted mb-0">{{(json_decode(Session::get('area'))->nombre)}}</span>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="info-box bg-light">
            <div class="info-box-content">
                <span class="info-box-text text-center text-muted">Equipo</span>
                <span class="info-box-text text-center text-muted mb-0">{{(json_decode(Session::get('equipo'))->nombre)}}</span>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="d-flex justify-content-center">
  <div class="col-md-6">
    {{-- Mes --}}   
    @php
    $cont = 1;
    use Carbon\Carbon;
    @endphp 
    @foreach($start as $str)        
        <div class="card card-default collapsed-card">
            <div class="card-header">
                <h3 class="card-title">{{$str[0]}}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="" data-card-widget="collapse"><i
                            class="fas fa-plus"></i></button>
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                            class="fas fa-remove"></i></button> --}}
                </div>
            </div>

            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    @foreach($str[1] as $rango)  
                    <div class="card">
                        <div class="card-header " id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="{{'#collapse'.$cont}}" aria-expanded="true" aria-controls="{{'collapse'.$cont}}">
                                    {{'Del '.$rango['inicio']->formatLocalized('%d').'  al  '.$rango['termino']->formatLocalized('%d')}}
                                </button>
                            </h2>
                        </div>

                        <div id="{{'collapse'.$cont}}" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            @if(count($rango['actv']) == 0)
                                <div class="card-body">
                                    <p >No hay registros en esta semana</p>
                                </div>
                            
                            @else
                                <div class="contTabla">
                                    <div class="table-responsive contTabla">
                                        <table class="table ttable">
                                            <tbody>
                                                @foreach($rango['actv'] as $actividad)
                                                <tr>
                                                    @php
                                                    $dateAct = date_parse($actividad->fecha_inicio);
                                                    $dateAct2 = Carbon::createFromDate($dateAct["year"],$dateAct["month"],$dateAct["day"]);
                                                    $dateAct2->hour = $dateAct["hour"];
                                                    $dateAct2->minute = $dateAct["minute"];
                                                    $dia = $dateAct2->format('l');
                                                    $hora = $dateAct2->format('H:i');
                                                    @endphp
                                                    <td>{{$dateAct2->formatLocalized('%A %d')}}</td>
                                                    <td>{{$hora}}</td>
                                                    <td>{{$actividad->nombre}}</td>
                                                    <td>
                                                        @if($actividad->estado == "generado")
                                                        <a class="btn btn-sm btn-warning botonTab" href="{{ route('actividades.edit',$actividad->id) }}"><i class="fa fa-clock-o conico"></i> Terminar</a>
                                                        {{-- @elseif($actividad->estado == "terminado")  --}}
                                                        @else                                                    
                                                        <a class="btn btn-sm btn-primary botonTab" href=""><i class="fa fa-fw fa-eye conico"></i> ver</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif                            
                        </div>  
                    </div>
                    @php
                    $cont++
                    @endphp
                    @endforeach
                </div>
            </div>            
        </div>
        
    @endforeach
    <div class="float-right">
        {{-- <a href="{{ route([ActividadeController::class, 'create'], ['area_id'=>'area1','equipo_id'=>'molino']) }}"  class="btn btn-primary btn-sm"  data-placement="left"> --}}
        <a href="{{ action('App\Http\Controllers\ActividadeController@create') }}" class="btn btn-primary btn-sm"  data-placement="left">
        {{ __('Generar actividad') }}
      </a>
    </div>  
</div>


@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('js')
@stop
