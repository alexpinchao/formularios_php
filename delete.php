<?php
include_once('db/database_utilities.php');

header ('Location: formulario_contacto_proceso.php');
$id = isset($_GET['id']) ? $_GET['id'] : 0;

delete($id);