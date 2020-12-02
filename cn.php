<?php
$conexion = mysqli_connect("localhost", "root", "","bd_prueba");
mysqli_set_charset($conexion, "utf8");
/*
if (!$conexion) {
    echo 'error al conectarnos a la base de datos';
}else {
    echo 'conectado a la base  de datos';
}
*/