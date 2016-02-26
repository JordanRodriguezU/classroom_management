<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('css/style.css') !!}
</head>
<body>
	<nav>
		<ul class="right">
			<li><a class='dropdown-button ' href='#' data-activates='big_size'><i class="material-icons">settings</i></a></li>
			<ul id='big_size' class='dropdown-content'>
				<li><a href="#!">Perfil</a></li>
				
				<li class="divider"></li>
				<li><a href="#!">Cerrar Sessión</a></li>
			</ul>
		</ul>
		<ul class="right hide-on-med-and-down">

			
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<div class="col m1">
					
					 <a href="{{url('moreuser')}}" class="btn-floating btn-large waves-effect waves-light teal lighten-1"><i class="material-icons">add</i></a>
				</div>
				<table class="bordered col m10 col offset-m1">
					<thead>
						<tr>
							<th data-field="id">Correo</th>
							<th data-field="name">Nombre</th>
							<th data-field="last_name">Apellido</th>
							<th data-field="phone">Telefono</th>
							<th data-field="action">Acción</th>
							<th data-field="active">Activo</th>
						</tr>
					</thead>
					<tbody>
						@foreach( $user as $user )
						<tr>
							<td>{{$user->email}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->last_name}}</td>
							<td>{{$user->phone}}</td>
							<td> <a class="btn-floating btn-large waves-effect waves-light teal lighten-1"><i class="material-icons">delete_forever</i> </a><a class="btn-floating btn-large waves-effect waves-light teal lighten-1"><i class="material-icons">update</i> </a> </td>
							
							@if ($user->active == "true")
							<td>
								<div class="switch">
									<label>
										<input checked type="checkbox">
										<span class="lever"></span>
									</label>
								</div>
							</td>
							@else
							<td>
								<div class="switch">
									<label>
										<input  type="checkbox">
										<span class="lever"></span>
									</label>
								</div>
							</td>
							@endif
							
							
						</tr>
						@endforeach

					</tbody>

				</table>

			</div>		
		</div>
	</div>
	{!!Html::script('js/jquery.min.js')!!}
	{!!Html::script('js/materialize.min.js')!!}
	{!!Html::script('js/animation.js')!!}
</body>
</html>