<?php 


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$clave;

//include('db.php');
$conexion=mysqli_connect("localhost", "root", "", "bd_pi");

$consulta="SELECT * FROM usuarios where usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("Location: https://blockwarts.org/");
}else{
	?>
	<?php 
	include("form-login.php");
	?>
	<script>alert('Usuario o contraseña erróneo. Vuelva a introducir los datos.');
	</script> 
	<?php 
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>