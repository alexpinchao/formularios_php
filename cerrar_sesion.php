<?php
    session_start();
    $var_sesion = $_SESSION['usuario'];
        if ($var_sesion = null || $var_sesion = ''){
            echo 'Usted no tiene autorizacion';
            die();
        }
    
    session_destroy();
    header("Location:ingresar.php");
?>