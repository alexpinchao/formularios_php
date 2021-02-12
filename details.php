<?php
include_once('db/database_utilities.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
if ($_POST){
    header('Location: formulario_contacto_proceso.php');
    //die();
    $email = isset($_POST['email']) ? $_POST['email']: '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    update($id, $email,$password);
    die();

}

$user = get_user_by_id($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
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
                                    <input type="text" id="email" name="email" value = "<?php echo $user['email']; ?>" placeholder="">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">Password</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="password" name="password" value = "<?php echo $user['password']; ?>" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-4">
                                    <label for="">
                                        <input type="submit" class="buttom success" value="MODIFICAR">
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    
</body>
</html>