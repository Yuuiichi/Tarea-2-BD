<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pagina principal">
    <meta name="keywords" content="index">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tours</title>
    <style>
        .btn{
            height: 300px;
        }
    </style>
</head>
<body>
    <?php include "includes/nav.php" ?>
    <?php
    $opciones = array(
        array("id" => 1, "nombre" => "Opción 1", "descripcion" => "Descripción de la opción 1"),
        array("id" => 2, "nombre" => "Opción 2", "descripcion" => "Descripción de la opción 2"),
        array("id" => 3, "nombre" => "Opción 3", "descripcion" => "Descripción de la opción 3")
    );
    ?>
    
    <main>
    <h1>Opciones Disponibles</h1> <br>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
        <?php foreach ($opciones as $opcion): ?>
        <tr>
            <td><?php echo $opcion['id']; ?></td>
            <td><?php echo $opcion['nombre']; ?></td>
            <td><?php echo $opcion['descripcion']; ?></td>
            <td><input type="radio" name="opcion_seleccionada" value="<?php echo $opcion['id']; ?>"></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </main>
    
    <?php include "includes/footer.php" ?>


    <script>src="javascript/script.js"</script>
</body>
</html>