@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('content')
	
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT'])!!}

		<div class="form-group">

		<div class="panel panel-default">
  		<div class="panel-heading"><h4>Editar Usuario {{$user->nombre}}</h4>
  		</div>
 		 <div class="panel-body">
   			

			<div class="form-group"> 
			{!! Form::label('email','Correo Electronico')!!}
			{!! Form::text('email',$user->email,['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::label('tipo_usuario','Tipo Usuario')!!}
			{!! Form::select('id_tipo',['1' => 'Administrador', '2' => 'Doctor', '3' => 'Paciente'],$user->id_tipo,['class' => 'form-control'])!!}
			</div>

			<div class="form-group"> 
			{!! Form::submit('Editar' , [ 'class' => 'btn btn-primary'])!!}
			</div>
  		</div>
		</div>

			
		</div>


		{!! Form::close()!!}

@endsection