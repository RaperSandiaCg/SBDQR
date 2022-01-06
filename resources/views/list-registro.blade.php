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
    <div class="card card-default col-md-6">
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
                  <div class="card-header " id="headingOne" >
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Some placeholder content for the second accordion panel. This panel is hidden by default.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>



</div>
</div>
@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
