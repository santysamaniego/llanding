<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="icon" href="../images/iconindex.ico">
	<link rel="stylesheet" href="../css//formulario.css">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
</head>

<body>
	<div id="principal" class="text-center">
		<div id="capa_gradient">
			<div id="form_container" class="d-inline-block">

				<form class="card-body text-center p-5" action="guardar.php" method="POST">
					<h4>Crear recibo</h4>

					<input class="controls d-block m-4" type="text" name="numero_recibo" id="numero_recibo" placeholder="Numero de recibo">
					<input class="controls d-block m-4" type="date" name="fecha_recibo" id="fecha_recibo">
					<input class="controls d-block m-4" type="text" name="nombre_y_apellido" id="nombre_y_apellido" placeholder="Nombre y apellido">
					<input class="controls d-block m-4" type="number" name="monto_recibo" id="monto_recibo" placeholder="Monto a pagar">
					<input class="controls d-block m-4" type="number" name="numero_cuota" id="numero_cuota" placeholder="Cuota n°:">
					<p>Firmar a continuación:</p>
					<canvas id="canvas"></canvas>
					<br>
					<button id="btnLimpiar">Limpiar</button>
					<button id="btnDescargar">Descargar</button>
					<button id="btnGenerarDocumento">Pasar a documento</button>
					<br>

					<button type="sumbit" class="btn btn-success btn-block" name="guardar">guardar</button>
				</form>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	<script src="../js/firma.js"></script>
	<script>
		if (window.opener) {
			document.querySelector("#firma").src = window.opener.obtenerImagen();

			///imprimir documento. si no quiere imprimir, remueve la siguiente linea
			window.print();
		}
	</script>
</body>

</html>