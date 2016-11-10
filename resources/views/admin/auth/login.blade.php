
	<link rel="stylesheet"  href=" {{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet"  href=" {{ asset('css/main.css')}}">


	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST'])!!}

	<div class="form-group">

		<div class="panel panel-default">
  		<div class="panel-heading"><h4>Login</h4>
  		</div>
 		 <div class="panel-body">
		
		<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-body">
  			<div class="panel-heading"><h4>Bienvenido a Toolkit</h4>
  		</div>
 		 	
  			<div class="form-group">
				{!! Form::label('correo','Correo electronico')!!}
				{!! Form::text('email',null,['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
			</div>

				<div class="form-group">
					{!! Form::label('password','Contraseña')!!}
					{!! Form::password('password',['class' => 'form-control', 'placeholder' => '*******', 'required'])!!}
				</div>

					<div class="form-group">
						{!! Form::submit('Ingresar' , [ 'class' => 'btn btn-primary'])!!}
						<a class="btn btn-link" href="{{route('admin.auth.register')}}">Registrarse</a>
					</div>
		</div>

	{!! Form::close()!!}

