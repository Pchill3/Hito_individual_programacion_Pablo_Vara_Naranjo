<?php
if (!empty($_POST['usuario']) AND !empty($_POST['password']) ) {

    include_once '../modelo/comercializadoras.php';
    $c = new Comercializadora;

    $nombre = $_POST['usuario'];
    $password = $_POST['password'];

     //Busqueda en la base de datos del usuario

    $recordset = $c->getUsuario($nombre, $password);

    $numfilas = $recordset->num_rows;

    //creacion de cookies
    if ($numfilas <> 0){
        $userdata = mysqli_fetch_assoc($recordset);
        $_SESSION["user_id"] = $userdata["id"];
        $fecha = time();
        setcookie ("usuario",$nombre,time()+ 3600*24*7,"/");
        setcookie ("password",$password,time()+ 3600*24*7,"/");
        setcookie ("fecha_acceso",$fecha,time()+ 3600*24*7,"/");
        setcookie("ip", $_SERVER['REMOTE_ADDR'], time()+ 3600*24*7, "/");
        
        header("Location:principal.html");
    }else{
        header("Location:../index.html");

    }
  

} else{
    header("Location:../index.html");
}

?>