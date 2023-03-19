<?php
class Session {
    //esta es la funcion de iniciar la sesion, en ella tambien esta el construct el cual se usa para crear y iniciar un objeto
    public function __construct() {
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    }
  
    //esta es la funcion para poner un atributo en la sesion    
    public function setAttribute($attribute, $value) {
      $_SESSION[$attribute] = $value;
    }
  
    //esta es la funcion para devolver el valor de la seasion, en el se ve si la sesion esta activa y si lo esta te devuelve el valor de la sesion que antes metiste
    public function getAttribute($attribute) {
      if (isset($_SESSION[$attribute])) {
        return $_SESSION[$attribute];
      }
      return null;
    }
  
    //esta es la funcion para borrar un atributo de la sesion
    public function deleteAttribute($attribute) {
      unset($_SESSION[$attribute]);
    }
  
    //esta es la funcion para destruir o borrar la seasion actual
   public function destroySession() {
      session_destroy();
    }
  }


  class Conexion {
    
    //aqui estan los parametros que tendra la conexion a la base de datos
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "hitobdd";
    private $link;

    //esta es la funcion contruir la cual comprueba si se ha conectado bien y sino te da un error
    function __construct() {
      $this->link = mysqli_connect($this->host, $this->username, $this->password, $this->database);
      if (!$this->link) {
        die("Conexión fallida: " . mysqli_connect_error());
      }
    }
    
    //esta es la funcion ejecutar, en resumen, esta función se encarga de ejecutar una consulta SQL en la base de datos y devolver los resultados en un array
    function executeQuery($sql) {
      $result = mysqli_query($this->link, $sql);
      return $result;
    }
    
    //esta es la funcion de contar columnas que como su nombre dice cuenta el numero de columnas y te devuelve el resultado
    function numRows($sql) {
      $result = mysqli_query($this->link, $sql);
      return mysqli_num_rows($result);
    }
    
    //esta es la funcion para obtener datos de una sola columna en la base de datos
    function getDataSingle($sql) {
      $result = mysqli_query($this->link, $sql);
      return mysqli_fetch_assoc($result);
    }
    
    //esta función se encarga de ejecutar una instrucción SQL en la base de datos y devuelve el número de filas afectadas por la instrucción o muestra un mensaje de error si la instrucción no se pudo ejecutar.
    function executeInstruction($sql) {
      $result = mysqli_query($this->link, $sql);
      if (!$result) {
        die("Error en la consulta: " . mysqli_error($this->link));
      }
      return mysqli_affected_rows($this->link);
    }

    //esta funcion te devuelve el ultimo id insertado en la base de datos
    function getLastId() {
      return mysqli_insert_id($this->link);
    }
    
    //esta funcion te cierra la conexion a la base de datos
    function close() {
      mysqli_close($this->link);
    }
    
    

  }
  

?>

