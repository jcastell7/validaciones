<?php

require  'Medoo.php';
class inscrito{
private $id;
private $nombre;
private $correo;
private $cedula;
private $facebook;
private $database;
use Medoo\Medoo;
function __construct($nombre, $correo, $cedula, $facebook=null) {
    $this->nombre = $nombre;
    $this->correo = $correo;
    $this->cedula = $cedula;
    $this->facebook = $facebook; 
    $database= new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'validacion',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
    ]);
$this->id=($database->max("validacion", "id"))+1;
}

function getNombre() {
    return $this->nombre;
}

function getCorreo() {
    return $this->correo;
}

function getCedula() {
    return $this->cedula;
}

function getFacebook() {
    return $this->facebook;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setCorreo($correo) {
    $this->correo = $correo;
}

function setCedula($cedula) {
    $this->cedula = $cedula;
}

function setFacebook($facebook) {
    $this->facebook = $facebook;
}
function añadirBaseDatos($fb){
    if($fb){
    $this->database->insert("validacion",["nombre"=> $this->nombre,"correo"=> $this->correo,"cedula"=> $this->cedula,"facebook"=> $this->facebook, "id"=> $this->id]);
    }else{
    $this->database->insert("validacion",["nombre"=> $this->nombre,"correo"=> $this->correo,"cedula"=> $this->cedula, "id"=> $this->id]);
    }
}

}
?>
