<?php
    //date_default_timezone_set('UTC');
    include("cn.php");
    $usuarios = "SELECT * FROM usuarios";
    /*se hace el llamado a la funcion de conexion con la base de datos*/
    
    $today = date('d/m/Y');
    $name = "alex Pinchao";
    $age= 25;
    $has_kids = true;
    define('__COUNTRY', 'Argentina');
    $hourly_rate = 59.99;
    $partner = new stdClass();
    $partner-> name = 'charly Alberty';
    $partner-> age = 30;

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
        <div><?php  echo $today; ?></div>
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
    <div class="row">
        <div class="large-4 columns">
        <?php
            $tomate = "Tomate";
            echo $tomate;
            echo '<select>
                <option> uno </option>
                <option> dos </option>
                <option> tres </option>
            </select>'
        ?>
        </div>
    </div>
    <div class="row">
        <div class="large-4">
            <b>¿Tienen hijos?</b>
        </div>
        <div class="large-4">
            <!-- operador ternario -->
            <?php echo $has_kids ? 'si' : 'no'?>
        </div>
        <div class="large-4">
            &nbsp;
        </div>
    </div>

    <div class="row">
        <div class="large-4">
            <b>Pais</b>
        </div>
        <div class="large-4">
            <!-- constante -->
            <?php echo __COUNTRY;?>
        </div>
        <div class="large-4">
            &nbsp;
        </div>
    </div>

    <div class="row">
        <div class="large-4">
            <b>SOCIOS</b>
        </div>
        <div class="large-4">
            <!-- operador ternario -->
            <?php echo $partner->name;?>
        </div>
        <div class="large-4">
            &nbsp;
        </div>
    </div>

    <footer class="row">
        <div class="large-12 columns">
            </hr>
                <div class="row">
                    <div class="large-6 columns">
                        <p> &copy; Copyrigth </p>
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li><a href=#>Inicio</a></li>
                            <li><a href=#>Articulos</a></li>
                            <li><a href=#>Contactos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
</body>
</html>