<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style_registro.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Crea una nueva cuenta</title>
</head>
<body>

	<div class="registro">

		<h1 class="tituloSeccion">Crea una cuenta</h1>

		<form action="registro.php" method="post" class="form-registro">

			<div class="input">
				<input type="text" name="nombre" placeholder="Nombre" class="input-50" required>
				<input type="text" name="apellidos" placeholder="Apellidos" class="input-50" required>
				<input type="email" name="correo" placeholder="Email" class="input-100" required>
				<input type="text" name="usuario" placeholder="Usuario" class="input-50" required>
				<input type="password" name="clave" placeholder="Contraseña" class="input-50" required>
				<input type="number" name="telefono" placeholder="Número de teléfono" class="input-100" required>
				<input type="submit" value="Crea tu cuenta" required class="btn-enviar">

				<p class="mensaje">¿Ya tienes una cuenta?<a href="form-login.php">Acceder</a></p>	
			</div>
		</form>
	</div>


</body>
</html>