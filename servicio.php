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
    $this->nombre=$_POST["nombre"];
    $this->cedula=$_POST["cedula"];
    $this->correo=$_POST["correo"];
    $this->checkbox=$_POST["check"];
    $this->facebook=$_POST["facebook"];
}

function comprobarDatos(){
    $patronNombre='/([a-zA-Z]|(ñ|Ñ))+/g';
    $patronCedula='/[0-9]+/';
    $patronCorreo='/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    $patronFb='/(([a-gi-zA-GI-Z]|(\d))+|(h|H)t([a-su-zA-SU-Z]|(\d))p|(h|H)t{2}([a-oq-zA-OQ-Z]|(\d)))([a-zA-Z]|(\d))*|(h|H)([a-zA-Z]|(\d))?([a-zA-Z]|(\d))?/';
    preg_match($patronNombre,$this->nombre ,$coincidenciasNombre);
    preg_match($patronCedula,$this->cedula ,$coincidenciasCC);
    preg_match($patronCorreo,$this->correo ,$coincidenciasCorreo);
    preg_match($patronFb,$this->facebook ,$coincidenciasfb);
    if(!($coincidenciasNombre[0]=== $this->nombre)){
        return "Su nombre co cumple los requisitos solicitados";
    }if(!($coincidenciasCC[0]=== $this->cedula)){
        return "la cedula no cumple con los requisitos solicitados";
    }if(!($coincidenciasCorreo[0]=== $this->correo)){
        return "el correo no cumple con los requisitos solicitados";
    }if($this->checkbox==="seleccionado"){
        if(!($coincidenciasfb[0]=== $this->facebook)){
            return "el facebook no cumple con los requisitos solicitados";
        }
    }
    return true;
}
function agregarInscripcion(){
    if ($this->comprobarDatos()){
        
    }
}

}

?>