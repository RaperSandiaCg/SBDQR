
    <div class="row">
    <form name="add-blog-post-form"  method="post" action="{{ route('actividades.store') }}">
      {{csrf_field()}}

      <div class="form-group col-6">
        <label for="fecha_inicio">Fecha de inicio</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control"  value="{{ $dt->toDateString() }}">
      </div>
      <div class="form-group col-6">
        <label for="hora_inicio">Hora de inicio</label>
        <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" value="{{ $dt->toTimeString() }}">
      </div>
      <div class="form-group col-md-12">
        <label for="encargado">Encargado</label>
        <input type="text" id="encargado" name="encargado" class="form-control" value="{{$nombreUsuario}}" disabled>
      </div>
      <div class="form-group col-md-12">
        <label for="nombre">Actividad</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required="">
      </div>
      <div class="form-group col-md-12">
        <label for="equipo_id">Equipo</label>
        <input type="text" name="equipo_id" class="form-control" required="" disabled value="{{$equipo}}">
      </div>

      <div class="form-group col-md-12">
        <label for="dep_operaciones">Departamental Operaciones</label>
        <input type="text" name="dep_operaciones" class="form-control" >
      </div>
      <div class="form-group col-md-12">
        <label for="dep_electrico">Departamental Eléctrico</label>
        <input type="text" name="dep_electrico" class="form-control" >
      </div>
      <div class="form-group col-md-12">
        <label for="dep_mecanico">Departamental Mecánico</label>
        <input type="text" name="dep_mecanico" class="form-control" >
      </div>

      <div class="form-group col-md-12">
        <label for="prueba_energia_o">Departamental Operaciones</label>
        <input type="text" name="prueba_energia_o" class="form-control" >
      </div>
      <div class="form-group col-md-12">
        <label for="prueba_energia_e">Departamental Eléctrico</label>
        <input type="text" name="prueba_energia_e" class="form-control" >
      </div>
      <div class="form-group col-md-12">
        <label for="prueba_energia_m">Departamental Mecánico</label>
        <input type="text" name="prueba_energia_m" class="form-control" >
      </div>

      <div class="form-group col-md-12">
        <label for="auditor">Auditor</label>
        <input type="text" name="auditor" class="form-control" >
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    

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
            {{ Form::label('encargado') }}
            {{ Form::text('encargado', $actividade->nombre, ['class' => 'form-control' . ($errors->has('encargado') ? ' is-invalid' : ''), 'placeholder' => 'Encargado']) }}
            {!! $errors->first('encargado', '<div class="invalid-feedback">:message</p>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('fecha_termino') }}
            {{ Form::text('fecha_termino', $actividade->fecha_termino, ['class' => 'form-control' . ($errors->has('fecha_termino') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Termino']) }}
            {!! $errors->first('fecha_termino', '<div class="invalid-feedback">:message</p>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $actividade->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('equipo') }}
            {{ Form::select('equipo', $equipos, null , ['class' => 'form-control' ]) }}
            {!! $errors->first('equipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div> --}}



