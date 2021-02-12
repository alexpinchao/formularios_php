<?php

require_once('data_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result ='';

if($mysqli -> connect_errno){
    echo 'error en la conexion';
    exit;
}

function run_query()
{
    global $mysqli, $result;
    $sql = 'SELECT * FROM php_usuarios';
    return $mysqli -> query($sql);
}

function run_query_servicio()
{
    global $mysqli, $result;
    $sql = 'SELECT * FROM php_servicios';
    return $mysqli -> query($sql);
}

function add($email, $password){
    global $mysqli;
$sql = "INSERT INTO php_usuarios (id,email,password) VALUES (null, '{$email}', '{$password}')";
$mysqli -> query($sql);
}

function update($id, $email, $password){
    global $mysqli;
$sql = "UPDATE php_usuarios SET email = '{$email}', password ='{$password}' WHERE id = {$id}";
$mysqli ->query($sql);
}

function delete($id){
    global $mysqli;
    $sql = "DELETE FROM php_usuarios WHERE id = {$id}";
    $mysqli -> query($sql);
}

function get_user_by_id($id)
{
    global $mysqli;
$sql = "SELECT * FROM php_usuarios WHERE id = {$id}";
//necesitamos regresar el valor
$result = $mysqli -> query($sql);
if ($result -> num_rows)
    return $result -> fetch_assoc();
return false;
}

function add_servicios ($id_usuario, $servicio, $ciudad){
    global $mysqli;
$sql = "INSERT INTO php_servicios (id_servicio, id_usuario, servicio, ciudad) VALUES (null, '{$id_usuario}', '{$servicio}', '{$ciudad}')";
$mysqli -> query($sql);
}