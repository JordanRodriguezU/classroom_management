<!DOCTYPE html>
<html>
<head>

	<title>Universidad Técnica Nacional</title>
	<meta charset="UTF-8">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('css/style.css') !!}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12">
				
				{!! Form::open(array('url' => 'admin','class' => 'login_user col offset-m2 z-depth-5')) !!}
				
				<div class="col m12 offset-m2 ">
					<h4><i class="material-icons" id="iconStartSession">&#xE853;</i>Iniciar Sesión </h4>

				</div>

				<div class="input-field col s6 m11">
					<i class="material-icons prefix">email</i>
					<input id="email" name="email" type="email" class="validate">
					<label for="email">Correo</label>
				</div>
				<div class="input-field col s6 m11 ">
					<i class="material-icons prefix">vpn_key</i>
					<input id="password" name="password" type="password" class="validate">
					<label for="password">Contraseña</label>
				</div>

				<div class="col m12 offset-m3">
					<button type="submit" name="login" class="waves-effect waves-light btn action_login"><i class="material-icons right">arrow_forward</i>Entrar</button>
				</div>

				<div class="col m12 offset-m3 forgetPassword">
					<a href="#emailplease" class="modal-trigger">Olvide mi contraseña ?</a>
				</div>

				{!! Form::close() !!}

				
				
				<div id="emailplease" class="modal">
					<div class="modal-content">
						{!! Form::open(array('url' => 'forgetemail','class' => '')) !!}
						<h5>Introducir el correo, para restablecer su contraseña</h5>
						<div class="input-field col s6 m11">
							<i class="material-icons prefix">email</i>
							<input id="emailforgetPassword" name="emailforgetPassword" type="email" class="validate">
							<label for="emailforgetPassword">Correo</label>
						</div>

					</div>
					<div class="modal-footer">
						<div class="col m5">
							
							{!!Form::button('Enviar',array('class' => 'waves-effect waves-light btn buttonForget','type' => 'submit'))!!}

						</div>
						<div class="col m5">
							<p>{{link_to('/','Atras', array('class' => 'waves-effect waves-light btn'))}}</div>	

							</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			{!!Html::script('js/jquery.min.js')!!}
			{!!Html::script('js/materialize.min.js')!!}
			{!!Html::script('js/animation.js')!!}

		</body>
		</html>