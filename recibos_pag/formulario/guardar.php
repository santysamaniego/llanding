<?php
	include("conexion.php");
		
	if (isset($_POST['guardar'])){
		$numero_recibo=$_POST['numero_recibo'];
		$fecha_recibo=$_POST['fecha_recibo'];
		$nombre_y_apellido=$_POST['nombre_y_apellido'];
		$monto_recibo=$_POST['monto_recibo'];
        $numero_cuota=$_POST['numero_cuota'];
        $firma=$_POST['firma'];

		$query="INSERT INTO `recibos`(`numero_recibo`, `fecha_recibo`, `nombre_y_apellido`, `monto_recibo`, `numero_cuota`, `firma`) VALUES ('$numero_recibo','$fecha_recibo','$nombre_y_apellido','$monto_recibo','$numero_cuota','$firma')";

		// if (!$result){
		// 	 ("query failed");
		// }
		// else{
		// 	echo"saved";
		// }

		//Confirmar contraseña

        $result=mysqli_query($conexion,$query);
		header("location:../php/index.php");
	}

	

?>