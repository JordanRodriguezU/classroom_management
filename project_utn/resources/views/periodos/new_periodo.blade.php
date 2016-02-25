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
						<h4 class="center">Crear Periodo</h4>
					</div>

					<div class="input-field col s6 m11">
						<input id="codigo" type="text" class="validate">
						<label for="codigo">Nombre Periodo</label>
					</div>

					<div class="input-field col s6 m11">
						<input type="date" class="datepicker">
						<label for="nombre">Fecha Inicio</label>
					</div>

					<div class="input-field col s6 m11">
						<input type="date" class="datepicker">
						<label for="nombre">Fecha Fin</label>
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
	
	<script  src="js/date.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/animation.js"></script>
</body>
</html>
