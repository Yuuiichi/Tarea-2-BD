<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pagina de reservas">
    <meta name="keywords" content="Reserva">
    <link rel="stylesheet" href="css/styles.css">
    <title>Reserva</title>
</head>
<body>
    <?php include "includes/nav.php" ?>

    <main>
        <form method="post">
            RUT: <input type="text" name="rut" placeholder="Ingrese Rut"> <br>
            Número de habitación: <input type="text" name="nro_habitacion" placeholder="Ingrese número"> <br>
            Fecha Check In: <input type="date" name="fecha_in"> <br>
            Fecha Check Out: <input type="date" name="fecha_out"> <br>
            Tipo de Habitación (single, double o king): <input type="text" name="tipo_habitacion" placeholder="Tipo habitacion"> <br>
            <input type="submit" name="reservar" value="Reservar"> <br>
        </form>
        <?php include "con_db.php"; 
        if (isset($_POST["reservar"])) {
            $rut = $_POST['rut'];
            $nro_habitacion = $_POST['nro_habitacion'];
            $fecha_in = $_POST['fecha_in'];
            $fecha_out = $_POST['fecha_out'];
            $tipo_habitacion = $_POST['tipo_habitacion'];

            $reserva="INSERT INTO reserva (rut, nro_habitacion, fecha_check_in, fecha_check_out, tipo_habitacion) VALUES ('$rut','$nro_habitacion','$fecha_in','$fecha_out','$tipo_habitacion')";
            $resultado = mysqli_query($conexion, $reserva);
            if ($resultado){
                ?>
                <h3 class="ok">Reserva realizada con Éxito!</h3>zzz
                <?php
            }
        }
        ?>
    </main>
    
    <?php include "includes/footer.php" ?>


    <script>src="javascript/script.js"</script>
</body>
</html>