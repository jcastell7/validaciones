<?php

//require 'inscrito.php';
//require  'Medoo.php';
class servicio{
private $inscrito;
private $nombre;
private $correo;
private $cedula;
private $checkbox;
private $facebook;
private $database;

function __construct() {
   $this->database= new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'validacion',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
    ]);

}

function comprobarDatos(){
    $this->nombre=$_POST["nombre"];
    $this->cedula=$_POST["cedula"];
    $this->correo=$_POST["correo"];
    $this->checkbox=$_POST["check"];
    $this->facebook=$_POST["facebook"];
    $patronNombre='/([a-zA-Z]|(ñ|Ñ))+/g';
    $patronCedula='/[0-9]+/';
    $patronCorreo='/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    $patronFb='/(([a-gi-zA-GI-Z]|(\d))+|(h|H)t([a-su-zA-SU-Z]|(\d))p|(h|H)t{2}([a-oq-zA-OQ-Z]|(\d)))([a-zA-Z]|(\d))*|(h|H)([a-zA-Z]|(\d))?([a-zA-Z]|(\d))?/';
    
    preg_match($patronFb,$this->facebook ,$coincidenciasfb);

}

}

?>