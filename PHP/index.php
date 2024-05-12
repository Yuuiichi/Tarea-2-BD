<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pagina principal">
    <meta name="keywords" content="index">
    <link rel="stylesheet" href="css/styles.css">
    <title>Hotel La Diversion</title>
</head>
<body>
    
    <?php include "includes/nav.php" ?>
    <?php include "includes/header.php" ?>
    
    
    <main>
        <a data-active="reservar" href="reserva.php">Reservar</a> <br>
        <a data-active="buscador" href="buscador.php">Buscar Reservas</a> <br>
        <a data-active="modificar" href="modificar.php">Modificar Reserva</a> <br>
        <a data-active="buscador" href="eliminar.php">Eliminar reserva</a> <br>
    </main>
    
    <?php include "includes/footer.php" ?>


    <script>src="javascript/script.js"</script>
</body>
</html>