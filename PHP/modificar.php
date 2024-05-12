<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="buscador">
    <meta name="keywords" content="index">
    <link rel="stylesheet" href="css/styles.css">
    <title>Modificar</title>
</head>
<body>
    
    <?php include "includes/nav.php" ?>
    
    <main>
        <form method="post">
            RUT del reservante: <input type="text" name="rut" placeholder="Ingrese Rut"> <br>
            Número de habitación a modificar: <input type="text" name="nro_habitacion_1" placeholder="Ingrese número"> <br>
            Número de cambio de habitación (escribir la misma si no se desea cambiar): <input type="text" name="nro_habitacion_2" placeholder="Ingrese número"> <br>
            Fecha Check In: <input type="date" name="fecha_in"> <br>
            Fecha Check Out: <input type="date" name="fecha_out"> <br>
            <input type="submit" name="modificar" value="Modificar"> <br>
        </form>
        <?php
        include "con_db.php"; 
        if (isset($_POST['modificar'])){
            $rut = $_POST['rut'];
            $nro_habitacion_1 = $_POST['nro_habitacion_1'];
            $nro_habitacion_2 = $_POST['nro_habitacion_2'];
            $fecha_in = $_POST['fecha_in'];
            $fecha_out = $_POST['fecha_out'];

            $modificar = "UPDATE reserva SET habitacion_reservada='$nro_habitacion_2',fecha_check_in='$fecha_in',fecha_check_out='$fecha_out' WHERE rut LIKE '%$rut%'";
            $resultado = mysqli_query($conexion, $modificar);
            if ($resultado){
                ?>
                <h3 class="ok">Modificación realizada con Éxito!</h3>
                <?php
            }else {
                echo "No se ha podido modificar";
            }
        }
        ?>
        
    </main>
    
    <?php include "includes/footer.php" ?>


    <script>src="javascript/script.js"</script>
</body>
</html>