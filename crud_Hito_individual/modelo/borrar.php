<?php

// requerimos el archivo de clases y iniciamos la clase

require_once 'comercializadoras.php';

$c = new Comercializadora();

//obtenemos el id y ejecutamos la funcion de borrar un post por id y te manda a la pagina de posts otra vez

$id = $_GET["id"];

$c->delete_by_id($id);

header("Location: ../controlador/inicio.php");
?>