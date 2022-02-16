<?php

/**
 * Permitir la conexion contra la base de datos
 */
class DB
{
  //Atributos necesarios para la conexion
  // private $host="localhost";
  // private $user="elusuario";
  // private $pass="lacontra";
  // private $db_name="proyectodual";
  // private $port="3306";

  
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="proyectodual";
  private $port="3307";
  

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;
  private $error_msj="";

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
      if ($this->conexion->connect_errno) {
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexión";
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  function msjError(){
    return $this->error_msj;
  }

  function realizarConsulta($consulta){
    if (!$this->hayError()){
      $resultado = $this->conexion->query($consulta);
      return $resultado;
    } else {
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }
  }
  
}
?>