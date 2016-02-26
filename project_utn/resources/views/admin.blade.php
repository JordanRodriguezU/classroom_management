<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
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
			<div class="col m4 col offset-m1 card">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/usuarios.png">
				</div>
				<div class="card-content col m12">
					<span class="card-title activator grey-text text-darken-4 adminText">Usuarios<i class="material-icons right">more_vert</i></span>
					<a href="{{url('users')}}" class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>
                      

				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Usuarios<i class="material-icons right">close</i></span>
					<li>Eliminar los docentes <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los docentes</p>
					<p>Actualizar algun docente</p>
					<p>Eliminar Docentes </p>
				</div>
			</div>


			
			<div class="col m4 col offset-m1 card" id="cursos">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/cursos.png">
				</div>
				<div class="card-content col m12">
					<span class="card-title activator grey-text text-darken-4 adminText">Cursos<i class="material-icons right">more_vert</i></span>
					<a class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>


				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Cursos<i class="material-icons right">close</i></span>
					<li>Eliminar los cursos <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los Cursos</p>
					<p>Actualizar algun Curso</p>
					<p>Eliminar Curso </p>
				</div>
			</div>

			<div class="col m4 col offset-m1 card">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/recintos.png">
				</div>
				<div class="card-content col m12">
					<span class="card-title activator grey-text text-darken-4 adminText">Recintos<i class="material-icons right">more_vert</i></span>
					<a class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>


				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Recintos<i class="material-icons right">close</i></span>
					<li>Eliminar los Recintos <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los Recintos</p>
					<p>Actualizar algun Recintos</p>
					<p>Eliminar Recintos </p>
				</div>
			</div>

			<div class="col m4 col offset-m1 card">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/aulas.png">
				</div>
				<div class="card-content col m12">
					<span class="card-title activator grey-text text-darken-4 adminTextclassroom">Aulas y laboratorios<i class="material-icons right">more_vert</i></span>
					<a class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>


				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Aulas y laboratorios<i class="material-icons right">close</i></span>
					<li>Eliminar los Aulas y laboratorios <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los Aulas y laboratorios</p>
					<p>Actualizar algun Aulas y laboratorios</p>
					<p>Eliminar Aulas y laboratorios </p>
				</div>
			</div>

			<div class="col m4 col offset-m1 card">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/horarios.png">
				</div>
				<div class="card-content col m12">
					<span class="card-title activator grey-text text-darken-4 adminText">Horarios<i class="material-icons right">more_vert</i></span>
					<a class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>


				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Horarios<i class="material-icons right">close</i></span>
					<li>Eliminar los Horarios <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los Horarios</p>
					<p>Actualizar algun Horarios</p>
					<p>Eliminar Horarios </p>
				</div>
			</div>

			<div class="col m4 col offset-m1 card">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/usuarios.png">
				</div>
				<div class="card-content col m12">
					<span class="card-title activator grey-text text-darken-4 adminText">Usuarios<i class="material-icons right">more_vert</i></span>
					<a class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>


				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Usuarios<i class="material-icons right">close</i></span>
					<li>Eliminar los docentes <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los docentes</p>
					<p>Actualizar algun docente</p>
					<p>Eliminar Docentes </p>
				</div>
			</div>
			<div class="col m4 col offset-m3 card">
				<div class="card-image waves-effect waves-light col m5 col offset-m3">
					<img class="activator imgCrud"  src="image/carreras.png">
				</div>
				<div class="card-content col m10">
					<span class="card-title activator grey-text text-darken-4 adminTextcareer">Carreras y Areas de Formación<i class="material-icons right">more_vert</i></span>
					<a class="btn-floating btn-large waves-effect waves-light teal lighten-1 buttonMainAdmin"><i class="material-icons">send</i></a>


				</div>
				<div class="card-reveal divider">
					<span class="card-title grey-text text-darken-4">Carreras y Areas de Formación<i class="material-icons right">close</i></span>
					<li>Eliminar los Carreras <i class="material-icons">delete_forever</i></li>
					<p></p>
					<p>Ver los Carreras</p>
					<p>Actualizar algun Carrera</p>
					<p>Eliminar Carreras</p>
				</div>
			</div>
			
		</div>

	</div>


	{!!Html::script('js/jquery.min.js')!!}
	{!!Html::script('js/materialize.min.js')!!}
	{!!Html::script('js/animation.js')!!}
</body>
</html>