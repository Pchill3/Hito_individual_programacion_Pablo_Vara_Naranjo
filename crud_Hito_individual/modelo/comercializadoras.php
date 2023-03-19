<?php

class Comercializadora{
    private $link;

    // para construir la conexion

    public function __construct(){
        require 'ejercicio_funciones.php';
        $this->link = new Conexion();
        }
    
    // funcion que inserta los campos de la tabla
    
    public function insertar ($email, $titulo, $contenido, $fecha, $imagen){
        $this->$email = $email;
        $this->$titulo = $titulo;
        $this->$contenido = $contenido;
        $this->$fecha = $fecha;
        $this->$imagen = $imagen; 
    

    // hacer la consulta SQL
        $sql =  "INSERT INTO `post` (`id`, `email`, `título`, `contenido`, `fecha`, `imagen`)
        VALUES (null, '$email', '$titulo', '$contenido', '$fecha', '$imagen');";

        $this->link->executeQuery($sql);
    }

    //Esta funcion hace un select a la tabla y muestra todos sus registros
    public function select() {
    
        $sql = "SELECT  `id`, `email`, `título`, `contenido`, `fecha`, `imagen` FROM `post`";

        $registros = $this->link->executeQuery($sql);

        

        // los registros se obtienen y se almacenan en la variable $registros
        
        // Mostrar registros:
        while($filas=mysqli_fetch_array($registros)){
            echo '<div class="post">';
            echo '<h2 class="clase1">', $filas['título'], '</h2>';
            echo '<p class="fecha">', $filas['fecha'], '</p>';
            echo '<img src="', $filas['imagen'], '" alt="Imagen del post">';
            echo '<p>', $filas['contenido'], '</p>';
            echo '<div class="acciones">';
            echo '<a id="b-editar" href="#'.$filas["id"].'"role="button">Editar</a>';
            echo '<a id="b-borrar" href="../modelo/borrar.php?id='.$filas["id"].'"role="button">Borrar</a>';
            echo '</div>';
            echo '</div>';
        }

        
    }
    
    // conseguir al usuario mediante una sintaxis de sql y despues devolver los datos obtenidos
    public function getUsuario($nombre, $password){

        $sql = "SELECT * FROM `usuarios` WHERE usuario = '".$nombre."' AND password = '".$password."'";

        $registros = $this->link->executeQuery($sql);

        return $registros;


}

    // borrar un post entero sacando el id para identificarlo
    public function delete_by_id($id){
        $sql = "DELETE FROM post WHERE `post`.`id` = $id";


        $this->link->executeQuery($sql);
    }
}   


?>