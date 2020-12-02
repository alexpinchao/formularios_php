<?php

    include("cn.php");
    $usuarios = "SELECT * FROM usuarios"
    /*se hace el llamado a la funcion de conexion con la base de datos*/
?>
<!-- este es el comienzo del html-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar tablas</title>
    <link href="estilos2.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- se crean el encabezado de la tabla --> 
    <div class="container-table">
        <div class="table-title">Datos de usuario</div>
        <div class="table-header">Nombre</div>
        <div class="table-header">Apellidos</div>
        <div class="table-header">Correo</div>
        <div class="table-header">Usuario</div>
        <div class="table-header">Telefono</div>
        <?php $resultado = mysqli_query($conexion, $usuarios);
        while($row = mysqli_fetch_assoc($resultado)){
        
        ?>
        <div class="table-item"> <?php echo $row["nombre"]; ?></div>
        <div class="table-item"><?php echo $row["apellidos"]; ?></div>
        <div class="table-item"><?php echo $row["correo"]; ?></div>
        <div class="table-item"><?php echo $row["usuario"]; ?></div>
        <div class="table-item"><?php echo $row["telefono"]; ?></div>
        <?php } mysqli_free_result($resultado)?>
    </div>
</body>
</html>