<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pagina de reservas">
    <meta name="keywords" content="Eliminar">
    <link rel="stylesheet" href="css/styles.css">
    <title>Eliminar</title>
</head>
<body>
    <?php include "includes/nav.php" ?>

    <main>
        <form method="post">
            RUT para eliminar reserva: <input type="text" name="rut" placeholder="Ingrese Rut"> <br>
            <input type="submit" name="eliminar" value="Eliminar"> <br>
        </form>
        <?php include "con_db.php";
        if (isset($_POST["eliminar"])) {
            $rut = $_POST['rut'];

            $eliminacion="DELETE FROM reserva WHERE rut LIKE '%$rut%'";
            $resultado = mysqli_query($conexion, $eliminacion);
            if ($resultado){
                ?>
                <h3 class="ok">Eliminación realizada con Éxito!</h3>
                <?php
            }
        }
        ?>
    </main>
    
    <?php include "includes/footer.php" ?>


    <script>src="javascript/script.js"</script>
</body>
</html>