
<div class="card-body"> 
  <div class="row">
    <div class="form-group col-6">
      <label for="fecha_inicio">Fecha de inicio</label>
      <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control"  value="{{ Carbon\Carbon::parse($actividad->fecha_inicio)->format('Y-m-d') }}" @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>
    <div class="form-group col-6">
      <label for="hora_inicio">Hora de inicio</label>
      <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" value="{{ Carbon\Carbon::parse($actividad->fecha_inicio)->format('H:i') }}" @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>
    @if($actividad->estado =='generado')         
      <div class="form-group col-6">
        <label for="fecha_inicio">Fecha de termino</label>
        <input type="date" id="fecha_termino" name="fecha_termino" class="form-control"  value="{{ $actividad->fecha_termino->toDateString() }}" @if($actividad->estado =='terminado')readonly="readonly"@endif>
      </div>
      <div class="form-group col-6">
        <label for="hora_inicio">Hora de termino</label>
        <input type="time" id="hora_termino" name="hora_termino" class="form-control" value="{{ $actividad->fecha_termino->format('H:i') }}"  @if($actividad->estado =='terminado')readonly="readonly"@endif>
      </div>
    @endif

    <div class="form-group col-md-12">
      <label for="encargado">Encargado</label>
      <input type="text" id="encargado" name="encargado" class="form-control" value="{{auth()->user()->nombreCompleto()}}" readonly="readonly">
    </div>
    <div class="form-group col-md-12">
      <label for="nombre">Actividad</label>
      <input type="text" id="nombre" name="nombre" class="form-control" value="{{$actividad->nombre}}" @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>
    <div class="form-group col-md-12">
      <label for="equipo">Equipo</label>
      <input type="text"  class="form-control" name="nombre_equipo"  value="{{$actividad->equipo->nombre}} "  readonly="readonly">
    </div>
    <div class="form-group col-md-12">
      <label for="dep_operaciones">Departamental Operaciones</label>
      <input type="text" name="dep_operaciones" class="form-control" value="{{$actividad->dep_operaciones}}" @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>
    <div class="form-group col-md-12">
      <label for="dep_electrico">Departamental Eléctrico</label>
      <input type="text" name="dep_electrico" class="form-control" value="{{$actividad->dep_electrico}}" @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>
    <div class="form-group col-md-12">
      <label for="dep_mecanico">Departamental Mecánico</label>
      <input type="text" name="dep_mecanico" class="form-control" value="{{$actividad->dep_mecanico}}" @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>

    <div class="form-group col-md-12">
      <label for="auditor">Auditor</label>
      <input type="text" name="auditor" class="form-control" value="{{$actividad->auditor}} " @if($actividad->estado =='generado' || $actividad->estado =='terminado') readonly="readonly"@endif>
    </div>

    @if($actividad->estado =='generado')         
    <div class="form-group col-md-12">
      <label for="exampleInputFile">Imagen</label>
      <div class="input-group">
        <input type="file" class="form-control" name="file" id="" accept="image/*" value="{{old('file')}}">
      </div>
      @if ($errors->has('file'))
        <span class="error text-danger" for="input-file">{{$errors->first('file')}}</span>      
      @endif 
    </div>  
    @endif

    <input type="hidden" name="equipo_id" value="{{$actividad->equipo->id}}">
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
  </div>
</div>
    {{-- 
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
    </div> --}}
    

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



