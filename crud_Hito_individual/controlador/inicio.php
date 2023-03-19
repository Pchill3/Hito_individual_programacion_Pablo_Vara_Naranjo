
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../vistas/normalize.css">
    </head>
    </head>
    <body>
        <!-- aqui estan los botones para volver e insertar -->
        <h1><button class="b-editar" onclick="window.location.href='../controlador/formulario.php'">Insertar Post</button></h1>
        <div class="boton1">
            <h1><button class="volver" onclick="window.location.href='../controlador/principal.html'">volver</button></h1>
        </div>
            <tbody>
                <?php 
                // usamos esto para enseñar por pantalla el contenido de la base de datos con los campos definidos en el select
                    include_once '../modelo/comercializadoras.php';
                    $c = new Comercializadora;
                    $c->select()
                ?>


                
    </body>
</html>