{{-- <div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $actividade->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $actividade->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_termino') }}
            {{ Form::text('fecha_termino', $actividade->fecha_termino, ['class' => 'form-control' . ($errors->has('fecha_termino') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Termino']) }}
            {!! $errors->first('fecha_termino', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $actividade->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('equipo_id') }}
            {{ Form::text('equipo_id', $actividade->equipo_id, ['class' => 'form-control' . ($errors->has('equipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipo Id']) }}
            {!! $errors->first('equipo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div> --}}

<div class="col-md-6">
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
                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" placeholder="dd/mm/yyyy" data-mask="" im-insert="false">
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
                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" placeholder="dd/mm/yyyy" data-mask="" im-insert="false">
            </div>
            <!-- /.input group -->
          </div>

          <!-- Actividad -->
          <div class="form-group">
            <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actividad:</font></font></label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bomba N2">
          </div>

          <!-- Encargado Rut-->

          <div class="form-group">
            <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre Encargado:</font></font></label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Miguel Cataño">
          </div>

          <!-- Encargado nombre-->

          <div class="form-group">
            <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Encargado:</font></font></label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="12345678-9">
          </div>

          {{-- Puntos de Aislamiento --}}
          <div class="form-group">
            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Puntos de Aislamiento</font></font></label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">                  
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
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">                  
              <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12345678-9</font></font></option>
             </select>{{--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-msie-container"><span class="select2-selection__rendered" id="select2-msie-container" role="textbox" aria-readonly="true" title="Alabama"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
          </div>

          {{-- Personal vinculado --}}
          <div class="form-group">
            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Personal vinculado</font></font></label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">                  
              <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18 Personas vinculadas</font></font></option>
             </select>{{--<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-msie-container"><span class="select2-selection__rendered" id="select2-msie-container" role="textbox" aria-readonly="true" title="Alabama"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
          </div>

          <div class="form-group">
            <label for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrada de archivo</font></font></label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elija el archivo</font></font></label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subir</font></font></span>
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