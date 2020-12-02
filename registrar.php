<?php

include 'cn.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

//hacer consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', 
'$apellidos', '$correo', '$usuario', '$clave', '$telefono')";

//verificar usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo '<script> 
            alert("El usuario ya esta registrado");
            window.history.go(-1);
        </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0){
    echo '<script> 
            alert("El correo ya esta registrado");
            window.history.go(-1);
        </script>';
    exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'error al registrarse';
}else {
    echo '<script> 
            alert("Usuario registrado exitosamente");
            window.history.go(-1);
        </script>';
}
//cerrar conexion
mysqli_close($conexion);

