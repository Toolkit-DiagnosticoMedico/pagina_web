@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')

	<div class="form-group">

		<div class="panel panel-default">
  		<div class="panel-heading"><h4>Ver lista de usuarios</h4>
  		</div>
 		 <div class="panel-body">

	<table class="table">
		<thead>
			<th>ID</th>
			<th>email</th>
			<th>tipo_usuario</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($user as $u)
				<tr>
					<td> {{$u->id}} </td>
					<td> {{$u->email}} </td>
					@if($u->id_tipo=='1')
						<td> Administrador </td>
					@endif

						@if($u->id_tipo=='2')
						<td> Doctor </td>
						@endif
							@if($u->id_tipo=='3')
							<td> Paciente </td>
							@endif
					<td><a href="{{route('admin.users.destroy' , $u->id)}}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar a este usuario?')"><i class="glyphicon glyphicon-minus"></i></a><a href="{{route('admin.users.edit', $u->id)}}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></td>
				</tr>
			@endforeach
		</tbody>
	</table>

		<div class="text-center">
			{!!$user->render()!!}
		</div>
@endsection