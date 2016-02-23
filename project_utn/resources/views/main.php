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
				<form class="login_user col offset-m2 z-depth-5" method="" action="">
					<div class="col m12 offset-m2 ">
						<h4><i class="material-icons" id="iconStartSession">&#xE853;</i>Iniciar Sesión </h4>

					</div>

					<div class="input-field col s6 m11">
						<i class="material-icons prefix">email</i>
						<input id="email" type="text" class="validate">
						<label for="email">Correo</label>
					</div>
					<div class="input-field col s6 m11 ">
						<i class="material-icons prefix">vpn_key</i>
						<input id="password" type="text" class="validate">
						<label for="password">Contraseña</label>
					</div>
					
					<div class="col m12 offset-m3">
						<button type="submit" name="login" class="waves-effect waves-light btn action_login"><i class="material-icons right">arrow_forward</i>Entrar</button>
					</div>
					<div class="col m4 ">
						
						<a href="" id="createUser"><i class="material-icons iconlogin">add_circle_outline</i>Crear usuario</a>
					</div>
					<div class="col m4 offset-m3 forgetPassword">
						<a href="" >Olvide mi contraseña ?</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/animation.js"></script>
</body>
</html>