<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style_login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login</title>
</head>
<body>

	<div class="login">

		<h1 class="tituloSeccion">Login</h1>

    	<form method="post" action="login.php" class="form-login">

    		<div class="input">

    		<input type="text" name="usuario" placeholder="Usuario" required="required" placeholder="Tu nombre de usuario" class="input-50">

       		<input type="password" name="clave" placeholder="Tu contraseña" required="required" placeholder="Escribe tu contraseña" class="input-50">

        	<button type="submit" class="btn-enviar">Acceder</button>

        	<p class="mensaje">¿No tienes cuenta?<a href="form-registro.php">Regístrate</a></p>
			

			</div>
   		 </form>	
	</div>


</body>
</html>