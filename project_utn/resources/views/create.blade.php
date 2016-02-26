<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Crear usuarios</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('css/style.css') !!}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col m12 formCreateUser">
				{!! Form::open(array('url' => 'create')) !!}
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					{{ Form::input('text','fullname',null, array('class' => 'validate','id' => 'fullname'))}}
					{{Form::label('fullname', 'Nombre completo', array('for' => 'fullname'))}}
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">phone</i>
					{{ Form::input('number','phone',null, array('class' => 'validate','id' => 'phone'))}}
					{{Form::label('Teléfono', 'Teléfono', array('for' => 'phone'))}}
				</div>
				<div class="input-field col s6 col offset-m3">
					<i class="material-icons prefix">email</i>
					{{ Form::input('email','email',null, array('class' => 'validate','id' => 'emailUser'))}}
					{{Form::label('email', 'Correo', array('for' => 'emailUser'))}}
				</div>
				<div class="input-field col s6 ">
					<i class="material-icons prefix">vpn_key</i>
					{{ Form::input('password','password',null, array('class' => 'validate','id' => 'password'))}}
					{{Form::label('password', 'Contraseña', array('for' => 'password'))}}
				</div>
				<div class="input-field col s6 ">
					<i class="material-icons prefix">vpn_key</i>
					{{ Form::input('password','Confirm_password',null, array('class' => 'validate','id' => 'confirm_password'))}}
					{{Form::label('password', 'Confirmar Contraseña', array('for' => 'confirm_password'))}}
				</div>
				<div class="col m4 col offset-m3">
					<input list="browsers" name="browser" placeholder="Carreras">
					<datalist id="browsers">
						@foreach( $carrer as $carrer )
						<option value={{$carrer->name}}>
							@endforeach
						</datalist>

					</div>
					<br>		
					<div class="col m6">
						<input list="profile" name="profile" placeholder="Perfil">
						<datalist id="profile">
						@foreach( $profile as $profile )
							<option value={{$profile->name}}>
								@endforeach
							</datalist>

						</div>
						<br>		
						<div class="col m6 ">
							<input list="type_profile" name="type_profile" placeholder="Tipo de usuario">
							<datalist id="type_profile">
								@foreach( $typeProfile as $p )
								<option value={{$p->description}}>
									@endforeach
								</datalist>

								<option value="Internet Explorer">

								</datalist>

							</div>
							<div class="col m4 buttonCreateUser">
								<a href="{{url('moreuser')}}" class="btn-floating btn-large waves-effect waves-light teal lighten-1"><i class="material-icons">add</i></a>
							</div>
							{!! Form::close() !!}
						</div>
					</div>

				</div>

				{!!Html::script('js/jquery.min.js')!!}
				{!!Html::script('js/materialize.min.js')!!}
				{!!Html::script('js/animation.js')!!}
			</body>
			</html>