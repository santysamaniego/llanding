<?php
include("../formulario/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div id="principal">
        <?php
        $query = "SELECT * FROM recibos";
        $result_task = mysqli_query($conexion, $query);

        while ($row = mysqli_fetch_array($result_task)) {  ?>


            <section>
                <div id="container_contenido">
                    <div id="contenido">
                        <header class="">
                            <div class="d-inline-block">
                                <h4 class="mx-4  my-0">Llanding</h4>
                                <p class="mx-4">Rivas 551</p>
                            </div>
                            <div class="d-inline-block float-end">
                                <h4 class="mx-4 my-0">Recibo</h4>
                                <p class="mx-4"> N° De recibo:<?php echo $row['numero_recibo'] ?></p>
                                <p class="mx-4">Fecha:<?php echo $row['fecha_recibo'] ?></p>
                            </div>
                        </header>

                        <hr>

                        <div id="descripcion_container" class="">
                            <div id="persona_recibo " class="mx-4 d-inline-block">
                                <h6>recibido de</h6>
                                <h3><?php echo $row['nombre_y_apellido'] ?></h3>

                            </div>
                            <div id="precio_recibo" class=" float-end d-inline-block mx-4">
                                <h5 class="float-end">$<?php echo $row['monto_recibo'] ?></h5>
                            </div>
                            <div id="descripcion" class="mx-3 my-3 d-inline-block">
                                <p class=" float-start">Gracias por su pago en contra de la</p><br>
                                <h6 class="my-0 mx-5 float-start">$<?php echo $row['monto_recibo'] ?></h6><br>
                                <p class="my-0 float-start">Saldo <?php echo $row['numero_cuota'] ?> cuotas semanales de <?php echo $row['monto_recibo'] ?></p>
                                <img src="" alt="Firma del usuario" id="firma" class="d-inline">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
    </div>





    <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>