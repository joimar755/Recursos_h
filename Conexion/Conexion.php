<?php
class Database{
  private $hostname = "localhost"; 
  private $database = "proyecto_y&s"; 
  private $username = "root"; 
  private $password = ""; 
  private $charset = "utf8"; 
  
  function Conectar(){
     try {
         $conexion = "mysql:host=".$this->hostname.";mysql:host=".$this->database.";charset=".$this->charset;
         $opciones = [
           PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION, 
           PDO::ATTR_EMULATE_PREPARES => false
         ];
         $pdo = new PDO($conexion, $this->username, $this->password, $opciones); 
         return $pdo;

     } catch (PDOException $e) {
         echo 'Error conexion'.$e->getMessage();
         exit;
     } 

  }
  


}


    



