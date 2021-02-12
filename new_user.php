<?php
include_once('db/database_utilities.php');

if ($_POST){
    header('Location: formulario_contacto_proceso.php');
    $email = isset($_POST['email']) ? $_POST['email']: '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    add($email, $password);

    $id_usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario']: '';
    $servicio = isset($_POST['servicio']) ? $_POST['servicio']: '';
    $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad']: '';

    add_servicios($id_usuario,$servicio, $ciudad);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
</head>

<body>
<div class="row">
        <div class="large-9 columns">
            <h3> Contactanos</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, suscipit dolorem molestias, possimus, adipisci consequatur id quisquam voluptatibus quia est accusantium dolore? Velit quas blanditiis architecto facere recusandae ducimus obcaecati.</p>
            <div class="seccion-container tabs">
                <section class="section">
                    <h5 class="title"><a href="#">contacta nuestra compañia</a></h5>
                    <div class="content">
                        <form action="" method="POST">
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">Email</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="email" name="email" placeholder="ej. alex pinchao">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">Password</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="password" name="password" placeholder="unavacalola">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">ID usuario</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="id_usuario" name="id_usuario" placeholder="ej. 4 debe estar relacionado con la tabla anterior">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">servicio</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="servicio" name="servicio" placeholder="ej. asesor comercial">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">ciudad</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="ciudad" name="ciudad" placeholder="santiago de cali">
                                </div>
                            </div>
                            <button type="submit" class="radius button">Registrar</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    
</body>
</html>