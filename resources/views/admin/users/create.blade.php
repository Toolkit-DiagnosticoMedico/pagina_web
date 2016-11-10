@extends('admin.template.main')

@section('title', 'Agregar Usuario')

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
	
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST'])!!}

		
 		 <div class="panel-body">
   			
			<div class="form-group"> 
			{!! Form::label('email','Correo Electronico')!!}
			{!! Form::text('email',null,['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('password','Contraseña')!!}
			{!! Form::password('password',['class' => 'form-control', 'placeholder' => '*******', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('tipo_usuario','Tipo Usuario')!!}
			{!! Form::select('id_tipo', ['1' => 'Administrador', '2' => 'Doctor' , '3' => 'Paciente'],null,['class' => 'form-control'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::submit('Registrar' , [ 'class' => 'btn btn-primary'])!!}
			</div>
			
		</div>


		{!! Form::close()!!}

@stop