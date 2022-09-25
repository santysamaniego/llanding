<?php

    include("database.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM registro WHERE id = $id";
        $result = mysqli_query($conexion, $query);
    }

    if (isset($_POST['actualizar'])) {
        $id = $_GET['id'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $password = $_POST['contraseña'];
        $confirmar_contraseña = $_POST['confirmar_contraseña'];

        $query = "UPDATE registro set usuario = '$usuario', email = '$email',password = '$password' WHERE id = $id";
            
            
            
            

         if ($confirmar_contraseña==$password){
             mysqli_query($conexion,$query);
             header("location:index.php");
         }
         else{
             echo"Las contraseñas deben coincidir";
         }


        // echo $nombre;
        // echo $apellido;
        // echo $email;
        // echo $contraseña;
        // echo $confirmar_contraseña;
        // echo $id;
    }

?>


<!DOCTYPE html> 
<html>
<head>
	<title>Actualizar registro</title>
	<meta charset="utf-8">
	<link rel="icon" href="../images/iconindex.ico">
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/registro.css">
</head>
<body>
	<div class="capa-gradient">
		<form class="form-register" action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
    		<h4>Actualizacion de Registro</h4>

    		<input class="controls" type="text"     name="usuario"    id="usuario"    placeholder="Nombre de usuario">
    		<input class="controls" type="email"    name="correo"     id="correo"     placeholder="Ingrese su Email">
    		<input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese una Contraseña">
			<input class="controls" type="password" name="confirmar_contraseña" id="confirmar_contraseña" placeholder="Confirmar Contraseña">

    		<button type="sumbit" class="btn btn-success btn-block" name="actualizar">Actualizar</button>
  		</form>
	</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="../../librerias/materialize/jquery-3.4.0.min.js"></script>
  <script src="../../librerias/materialize/js/materialize.min.js"></script>
</body>
</html>