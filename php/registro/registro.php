<?php
    include("database.php");
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="icon" href="../images/iconindex.ico">
	<link rel="stylesheet" href="../../css/index/registro.css">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div id="principal" class="text-center">
		<div id="capa_gradient">
			<div id="form_container" class="d-inline-block ">
				<form class="card-body text-center p-5" action="guardar.php" method="POST">
    				<h4>Registrarse</h4>

    				<input class="controls d-block m-4" type="text"     name="usuario"    			id="usuario"    		  placeholder="Nombre de usuario">
    				<input class="controls d-block m-4" type="email"    name="correo"     			id="correo"     		  placeholder="Ingrese su Email">
    				<input class="controls d-block m-4" type="password" name="contraseña" 			id="contraseña" 		  placeholder="Ingrese una Contraseña">
					<input class="controls d-block m-4" type="password" name="confirmar_contraseña" id="confirmar_contraseña" placeholder="Confirmar Contraseña">

    				<button type="sumbit" class="btn btn-success btn-block" name="guardar">guardar</button>

    				<p class="m-4"><a href="#">¿Ya tengo Cuenta?</a></p>

  				</form>
			</div>
		</div>	
	</div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>