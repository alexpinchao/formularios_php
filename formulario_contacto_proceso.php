<?php
include_once('db/database_utilities.php');
$result = run_query();
$result_servicio = run_query_servicio();
//se puede poner aqui si no se usa while
//$user = $result -> fetch_assoc();


    function debug($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }

debug($_POST);

$name = isset($_POST['name']) ? $_POST['name']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$message = isset($_POST['message']) ? $_POST['message']: '';
$idiomas = isset ($_POST['idiomas']) ? $_POST['idiomas']: '';

echo "hola {$name}, tu correo es; {$email} y tu mensaje es: {$message}";
?>
<div class="row">
    <p> desde aqui se comienza a imprimir datos de cualquier base de datos</p>
</div>

<div class="row">
    <div class="large-9">
        <h3>manejos de bases de datos</h3>
        <p>listado</p>
        <div class="seccion-container">
            <section>
                <div class="content">
                    <div class="row">

                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th width="200">ID</th>
                                <th>correos</th>
                                <th width="150">Contraseñas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while ($user = $result -> fetch_assoc()){?>
                            <tr>
                                <td><?php echo $user['id'] ;?></td>
                                <td><?php echo $user['email'] ;?></td>
                                <td><?php echo $user['password'] ;?></td>
                                <td>
                                    <a href="./details.php?id=<?php echo $user['id'] ;?>" class="button tiny alert">detalles</a>
                                    <a href="./delete.php?id=<?php echo $user['id'] ;?>" class="button tiny alert">eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-9">
        <h2>manejos de bases de datos</h2>
        <p>listado servicios</p>
        <div class="seccion-container">
            <section>
                <div class="content">
                    <div class="row">

                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th width="200">ID servicio</th>
                                <th width="200">ID usuario</th>
                                <th>servicio</th>
                                <th width="150">cuidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while ($servicio = $result_servicio -> fetch_assoc()){?>
                            <tr>
                                <td><?php echo $servicio['id_servicio'] ;?></td>
                                <td><?php echo $servicio['id_usuario'] ;?></td>
                                <td><?php echo $servicio['servicio'] ;?></td>
                                <td><?php echo $servicio['ciudad'] ;?></td>
                                <td>
                                    <a href="./details.php?id=<?php echo $servicio['id_servicio'] ;?>" class="button tiny alert">detalles</a>
                                    <a href="./delete.php?id=<?php echo $servicio['id_servicio'] ;?>" class="button tiny alert">eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
<?php 
switch ($idiomas) {
    case '0':
        echo 'buen dia';
        break;
        case '1':
            echo 'good day';
            break;
            case '2':
                echo 'bo jour';
                break;
    
    default:
        # code...
        break;
}
?>