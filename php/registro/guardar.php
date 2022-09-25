<?php
	include("database.php");
		
	if (isset($_POST['guardar'])){
		$usuario=$_POST['usuario'];
		$email=$_POST['correo'];
		$password=$_POST['contraseña'];
		$confirmar_contraseña=$_POST['confirmar_contraseña'];

		$query="INSERT INTO `registro`(`usuario`, `email`, `password`) VALUES ('$usuario','$email','$password')";

		// if (!$result){
		// 	 ("query failed");
		// }
		// else{
		// 	echo"saved";
		// }

		//Confirmar contraseña

		if ($confirmar_contraseña==$password){
			$result=mysqli_query($conexion,$query);
			header("location:index.php");
		}
		else{
			echo"confirmacion incorrecta";
		}
	}

	

?>