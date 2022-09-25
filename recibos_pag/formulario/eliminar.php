<?php

    include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM registro WHERE id=$id";
        $result = mysqli_query($conexion,$query);
        
        header("location: registrados.php");
    }

?>