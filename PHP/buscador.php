<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="buscador">
    <meta name="keywords" content="index">
    <link rel="stylesheet" href="css/styles.css">
    <title>Buscador</title>
</head>
<body>
    
    <?php include "includes/nav.php" ?>
    
    <main>
        <form action="" method="get">
            <input type="text" name="busqueda" placeholder="Escriba número habitación"> <br>
            <input type="submit" name="buscar" value="Buscar">
        </form>
        <?php
        include "con_db.php";
        if (isset($_GET["buscar"])) {
            $busqueda = $_GET["busqueda"];
            $consulta = $conexion->query("SELECT * FROM reserva WHERE nro_habitacion LIKE '%$busqueda%'");
            while ($row = $consulta->fetch_array()){
                echo "La habitación ".$row['nro_habitacion']." está reservada desde ".$row['fecha_check_in']." Hasta ".$row['fecha_check_out'].'<br>';
            }
        }
        ?>
        
    </main>
    
    <?php include "includes/footer.php" ?>


    <script>src="javascript/script.js"</script>
</body>
</html>