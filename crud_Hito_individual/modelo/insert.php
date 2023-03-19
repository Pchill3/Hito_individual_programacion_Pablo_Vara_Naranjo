<?php

// requerimos la clase comercializadoras y la iniciamos

require_once 'comercializadoras.php';

$c = new Comercializadora;

// recibimos los campos por post de el archivo de formulario y usamos la funcion insertar para introducirlos en la base de datos, por ultimo redirigimos al usuario a la pagina 
// que enseña posts.

$email = $_POST['email'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];

$c->insertar($email, $titulo, $contenido, $fecha, $imagen);

header(("location: ../controlador/inicio.php"));


?>