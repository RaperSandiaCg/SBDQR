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

                    <div class="d-flex justify-content-center pt-5">
                        <div class="col-md-6" >
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tarjeta de ingreso</font></font></h3>
                          </div>
                          <!-- Envabezado de tageta -->
                          <!-- Inicio de Formulario -->
                          <form role="form">
                            <div class="card-body">
                    
                              <!-- Fecha de inicio -->
                              <div class="form-group">
                                <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de ingreso:</font></font></label>
                    
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" placeholder="10-01-2022" data-mask="" im-insert="false" disabled>
                                </div>
                                <!-- /.input group -->
                              </div>
                    
                            <!-- Fecha de termino -->
                              <div class="form-group">
                                <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de termino:</font></font></label>
                    
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" placeholder="10-01-2022" data-mask="" im-insert="false" disabled>
                                </div>
                                <!-- /.input group -->
                              </div>
                    
                              <!-- Actividad -->
                              <div class="form-group">
                                <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actividad:</font></font></label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mantención" disabled>
                              </div>
                    
                              <!-- Encargado Rut-->
                    
                              <div class="form-group">
                                <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre Encargado:</font></font></label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Miguel Cataño" disabled>
                              </div>
                    
                              <!-- Encargado nombre-->
                    
                              <div class="form-group">
                                <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Encargado:</font></font></label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="12345678-9" disabled>
                              </div>
                    
                              {{-- Puntos de Aislamiento --}}
                              <div class="form-group">
                                <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Puntos de Aislamiento</font></font></label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" disabled>                  
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 Punto de Aislamiento</font></font></option>
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 Puntos de Aislamiento</font></font></option>
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 Puntos de Aislamiento</font></font></option>
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4 Puntos de Aislamiento</font></font></option>
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5 Puntos de Aislamiento</font></font></option>
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 Puntos de Aislamiento</font></font></option>
                                 </select>{{--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-msie-container"><span class="select2-selection__rendered" id="select2-msie-container" role="textbox" aria-readonly="true" title="Alabama"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                              </div>
                    
                              {{-- Rut empresa encargada --}}
                              <div class="form-group">
                                <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut empresa encargada</font></font></label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" disabled>                  
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12345678-9</font></font></option>
                                 </select>{{--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-msie-container"><span class="select2-selection__rendered" id="select2-msie-container" role="textbox" aria-readonly="true" title="Alabama"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                              </div>
                    
                              {{-- Personal vinculado --}}
                              <div class="form-group">
                                <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Personal vinculado</font></font></label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" disabled>                  
                                  <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18 Personas vinculadas</font></font></option>
                                 </select>{{--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-msie-container"><span class="select2-selection__rendered" id="select2-msie-container" role="textbox" aria-readonly="true" title="Alabama"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                              </div>
                              
                              
                              <div class="form-group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Ver imagen
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Libro de registro</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://http2.mlstatic.com/D_NQ_NP_764937-MLC43523683934_092020-O.jpg" alt="Registro" width="300">         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                    
                            
                    
                            <!-- /.card-body -->
                    
                            <div class="card-footer">
                                <a href="{{ route('actividades.index') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                  {{ __('Agregar Registro') }}
                                </a>
                            </div>
                    
                            {{-- <div class="card-footer">
                              <button href="{{ route('actividades.index') }}" type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Agregar Registro</font></font></button>
                            </div> --}}
                          </form>
                        </div>
                        <!-- /.card -->
                    
                    </div>
                    </div>

                    {{-- @include('formFinalizar') --}}

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
