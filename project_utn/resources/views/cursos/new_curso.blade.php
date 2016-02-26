<!DOCTYPE html>
<html>
<head>

	<title>Universidad Técnica Nacional</title>
	<meta charset="UTF-8">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
		<div class="container">
		<div class="row">
			<div class="col m12">
				<form class="col offset-m1" method="" action="">
					<div class="row">
						<h4 class="center">Crear Curso</h4>
					</div>

					<div class="input-field col s6 m11">
						<select id="carrera" class="browser-default">
							<option value="" disabled selected>Seleccione Carrera</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
					</div>

					<div class="input-field col s6 m11">
						<input id="codigo" type="text" class="validate">
						<label for="codigo">Código Curso</label>
					</div>

					<div class="input-field col s6 m11">
						<input id="nombre" type="text" class="validate">
						<label for="nombre">Nombre Curso</label>
					</div>
								
					<div class="col m5 offset-m1">
						<button type="submit" name="save" class="waves-effect waves-light btn action_login"><i class="material-icons right">cancel</i>Cancelar</button>
					</div>
					<div class="col m5 ">
						<button type="submit" name="cancel" class="waves-effect waves-light btn action_login"><i class="material-icons right">done</i>Guardar</button>
					</div>
					

				</form>
			</div>
		</div>
	</div>
	

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/animation.js"></script>
</body>
</html>
