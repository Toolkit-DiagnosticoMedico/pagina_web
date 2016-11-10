@extends('admin.template.main')

@section('title', 'Crear cita')
	


@section('content')
	
	{!! Form::open(['route' => 'admin.citas.store', 'method' => 'POST'])!!}
	<div class="form-group">

		<div class="panel panel-default">
  		<div class="panel-heading"><h4>Realizar una Cita Medica</h4>
  		</div>
 		 <div class="panel-body">

 		 @if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors ->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
			
<input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime">
 
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>   
			

    		<div class="form-group">
 		 	{!! Form::label('desc','Descripcion:')!!}
			{!! Form::textarea('descripcion',null,['class' => 'form-control', 'cols=50', 'rows=10', 'placeholder' => 'Maximo 180 caracteres....'])!!}
			</div>

			<div class="form-group">
 		 	{!! Form::label('id_paciente','Paciente Autentificado')!!}
			{!! Form::text('id_paciente',$paciente->id,['class' => 'form-control','readonly'])!!}
			</div>

			<div class="form-group">
 		 	{!! Form::label('id_doctor','Lista de Doctores')!!}
			{!! Form::select('id_doctor',$doctores, null, ['class' => 'form-control','required'])!!}
			</div>
			
			<div class="form-group"> 
			{!! Form::submit('Registrar' , [ 'class' => 'btn btn-primary'])!!}
			</div>
  		</div>
		</div>
			
		</div>


		{!! Form::close()!!}

@endsection
	
