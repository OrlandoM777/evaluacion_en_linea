@extends('layouts.principal')
@section('content')
<div class="container well" id="sha">
		<div class="row">
			<div class="col-xs-12">
				<img src="img/login.png" class="img-
                responsive" id="login">
			</div>
		</div>
		<form class="logueo" action="check.php" method="POST">
			<div class="form-group">
				<input type="email" class="form-control" placeholder="correo electronico" name="email" requerid autofocus>
                 
			</div>
			<div class="form-group">
				<input type="email" class="form-control" placeholder="contraseña" name="pass" required>

			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesion</button>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="1" name="remember">no cerrar sesion
                </label>
                <p class="help-block"><a href="#">¿no puedes acceder a tu cuenta</a></p>

			</div>

		</form>



	</div>
@stop
	<style>
      body{
        padding-top: 40px;
        padding-bottom: 40px;
      }
      .logueo{
         max-width: 330px;
         padding: 15px;
         margin: 0 auto;
      }
      #sha{
      	max-width: 340px;
      	-webkit -box-shadow: 0px 0px 18px 0px rgba(48,50,50,0,48);
      	-moz -box-shadow: 0px 0px 18px 0px rgba(48,50,50,0,48);
      	box-shadow: 0px 0px 18px 0px rgba(48,50,50,0,48);
      	border-radius:6%;
      }
      #login{
      	width: 96px;
      	height: 96px;
      	margin: 0px auto 10px;
      	display: block;
      	border-radius: 50%;
      }
	</style>