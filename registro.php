<?php

		$conexion=mysqli_connect("localhost", "root", "", "bd_pi");

		$nombre = $_POST["nombre"];
		$apellidos = $_POST["apellidos"];
		$correo = $_POST["correo"];
		$usuario = $_POST["usuario"];
		$clave = $_POST["clave"];
		$telefono = $_POST["telefono"];

		$insertar = "INSERT INTO usuarios(nombre, apellidos, correo, usuario, clave, telefono)VALUES('$nombre', '$apellidos', '$correo', '$usuario', 
			'$clave', '$telefono')";

		// Verificar usuario

		$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

		if (mysqli_num_rows($verificar_correo) > 0){
			echo '<script>alert("Este correo ya está registrado"); window.history.go(-1);</script>';

		exit;

		}

		//  Comprobamos si funciona el registro de usuario. Si funciona, saltará un alert informando al usuario de que se ha registrado correctamente y lo redigirá directamente a Login después de que haya dado OK al alert.  

		$resultado = mysqli_query($conexion, $insertar);

		if (!$resultado) {
			echo ' Error al registrarse';
		} else {
			echo "<script>
                alert('¡Te has registrado correctamente! Haz inicio en tu cuenta para acceder.');
                window.location= 'form-login.php'
    			</script>";
		}

		mysqli_close($conexion);
?>

