<?php

require 'inscrito.php';
require  'Medoo.php';
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

    
}
}
?>