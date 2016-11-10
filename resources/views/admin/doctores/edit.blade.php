@extends('admin.template.main')

@section('title', 'Agregar Doctor')

@section('content')

	@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors ->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	{!! Form::open(['route' => ['admin.doctores.update',$doctor],'method' => 'PUT'])!!}
	
		<div class="form-group">

		<div class="panel panel-default">
  		<div class="panel-heading"><h4>Registro de Doctor</h4>
  		</div>
 		 <div class="panel-body">
   			
   			@if($doctor == null)
   			<div class="form-group">
 		 	{!! Form::label('name','Nombre(s)')!!}
			{!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Ingresa tu nombre', 'required'])!!}
			</div>
			
			<div class="form-group"> 
			{!! Form::label('apellido','Apellido(s)')!!}
			{!! Form::text('apellidos',null,['class' => 'form-control', 'placeholder' => 'Ingresa tus apellidos', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('telefono','Ingresa tu telefono')!!}
			{!! Form::text('telefono',null,['class' => 'form-control', 'placeholder' => 'Ingresa tu telefono', 'required'])!!}
			</div>


			<div class="form-group"> 
			{!! Form::label('edad','Ingresa tu edad')!!}
			{!! Form::text('edad',null,['class' => 'form-control', 'placeholder' => 'Ingresa tu edad', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('direccion','Ingresa tu direccion')!!}
			{!! Form::text('direccion',null,['class' => 'form-control', 'placeholder' => 'Ingresa tu direccion', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('cedula_profesional','Cedula profesional')!!}
			{!! Form::text('cedula_profesional',null,['class' => 'form-control', 'placeholder' => 'Ingresa tu cedula profesional'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('especialidad','Especialidad ')!!}
			{!! Form::text('especialidad',null,['class' => 'form-control', 'placeholder' => 'Ingresa tu Especialidad'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('id_user', 'Id_usuario')!!}
			{!! Form::text('id_user', $doctor->id,['class' => 'form-control', 'disabled'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::submit('Registrar' , [ 'class' => 'btn btn-primary'])!!}
			</div>
  		</div>
		</div>

		</div>

		@elseif($doctor != null)

		<div class="form-group">
 		 	{!! Form::label('name','Nombre(s)')!!}
			{!! Form::text('nombre',$doctor->nombre,['class' => 'form-control', 'placeholder' => 'Ingresa tu nombre', 'required'])!!}
			</div>
			
			<div class="form-group"> 
			{!! Form::label('apellido','Apellido(s)')!!}
			{!! Form::text('apellidos',$doctor->apellidos,['class' => 'form-control', 'placeholder' => 'Ingresa tus apellidos', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('telefono','Ingresa tu telefono')!!}
			{!! Form::text('telefono',$doctor->telefono,['class' => 'form-control', 'placeholder' => 'Ingresa tu telefono', 'required'])!!}
			</div>


			<div class="form-group"> 
			{!! Form::label('edad','Ingresa tu edad')!!}
			{!! Form::text('edad',$doctor->edad,['class' => 'form-control', 'placeholder' => 'Ingresa tu edad', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('direccion','Ingresa tu direccion')!!}
			{!! Form::text('direccion',$doctor->direccion,['class' => 'form-control', 'placeholder' => 'Ingresa tu direccion', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('cedula_profesional','Cedula profesional')!!}
			{!! Form::text('cedula_profesional',$doctor->cedula_profesional,['class' => 'form-control', 'placeholder' => 'Ingresa tu cedula profesional'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('especialidad','Especialidad ')!!}
			{!! Form::text('especialidad',$doctor->especialidad,['class' => 'form-control', 'placeholder' => 'Ingresa tu Especialidad'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('id_user', 'Id_usuario')!!}
			{!! Form::text('id_user', $doctor->id,['class' => 'form-control', 'disabled'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::submit('Registrar' , [ 'class' => 'btn btn-primary'])!!}
			</div>
  		</div>
		</div>

		</div>

		@endif
		{!! Form::close()!!}

@endsection

