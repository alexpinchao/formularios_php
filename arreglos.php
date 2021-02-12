<?php
    function debug($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }
    
    //un arreglo
    $user_data = [];
    $user_data['name'] = 'stive bosniac';
    $user_data['age'] = 65;
    $user_data['company'] = 'apple';
    $user_data['availabilily'] = true;
    //grupo de arreglos

    $famous_tech_people[] = [
        'name' =>'stive jobs',
        'address' => 'cupertino, ca',
        'availability'=> false,
        'email'=> 'stive@aapple.com',
    ];

    $famous_tech_people[] = [
        'name' =>'Bill gastes',
        'address' => 'Resto, vi',
        'availability'=> true,
        'email'=> 'bill@microsoft.com',
    ];

    $famous_tech_people[] = [
        'name' =>'scarlet johanson',
        'address' => 'miami, miami',
        'availability'=> true,
        'email'=> 'scarlet@mavengers.com',
    ];

    /*vamos a crear un while con idiomas */
    $lenguajes[] = 'Español';
    $lenguajes[] = 'ingles';
    $lenguajes[] = 'Frances';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <div class="row">
        <div class="large-3 columns">
            <h1> <img src ="#"/></h1>
        </div>
        <div class="large-9 columns">
            <ul class="right button-group">
                <li><a href="#" class="button">Inicio</a></li>
                <li><a href="#" class="button">contacto</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h4>Hola</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor alias accusamus sit quis hic eos sed quidem necessitatibus, omnis eaque eum. Porro maiores aliquid tempore necessitatibus quibusdam iste quaerat illo?</p>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <div class="panel">
                <h4>contenido del arreglo</h4>
                <div class="row">
                    <div class="large-12 columns">
                        <?php debug($user_data); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <table width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>correo electronico</th>
                        <th>disponible</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($famous_tech_people as $person) {?>
                    <tr>
                        <th><?php echo $person['name'] ?></th>
                        <th><?php echo $person['address'] ?></th>
                        <th><?php echo $person['email'] ?></th>
                        <th><?php echo $person['availability'] ? 'si':'no'?></th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="large-9 columns">
            <h3> Contactanos</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, suscipit dolorem molestias, possimus, adipisci consequatur id quisquam voluptatibus quia est accusantium dolore? Velit quas blanditiis architecto facere recusandae ducimus obcaecati.</p>
            <div class="seccion-container tabs">
                <section class="section">
                    <h5 class="title"><a href="#">contacta nuestra compañia</a></h5>
                    <div class="content">
                        <form action="formulario_contacto_proceso.php" method="POST">
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">Idiomas</label>
                                </div>
                                <div class="large-10 columns">
                                    <select name="idiomas">
                                        <?php 
                                            $i = 0;
                                            while ($i < count($lenguajes)){ ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php echo $lenguajes[$i]; ?>
                                        </option>
                                            <?php $i++;} ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">nombre</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="name" name="name" placeholder="ej. alex pinchao">
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="large-2 columns">
                                    <label for="" class="inline">email</label>
                                </div>
                                <div class="large-10 columns">
                                    <input type="text" id="email" name="email" placeholder="ej. alexpinchao@gmail.com">
                                </div>
                            </div>
                            <label>Mensaje</label>
                            <textarea rows="4" name="message"></textarea>
                            <button type="submit" class="radius button">enviar</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    

</body>
</html>