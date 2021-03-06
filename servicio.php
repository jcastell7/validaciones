<?php

require 'inscrito.php';

class servicio{
private $inscrito;
private $nombre;
private $correo;
private $cedula;
private $checkbox;
private $facebook;

function __construct() {
    $this->nombre=$_POST["nombre"];
    $this->cedula=$_POST["cedula"];
    $this->correo=$_POST["correo"];
    if(isset($_POST["check"])){
    $this->checkbox=$_POST["check"];
    $this->facebook=$_POST["facebook"];
    }
    
}

function comprobarDatos(){
    $patronNombre='/([a-zA-Z]|(ñ|Ñ))+/';
    $patronCedula='/[0-9]+/';
    $patronCorreo='/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    $patronFb='/(([a-gi-zA-GI-Z]|(\d))+|(h|H)t([a-su-zA-SU-Z]|(\d))p|(h|H)t{2}([a-oq-zA-OQ-Z]|(\d)))([a-zA-Z]|(\d))*|(h|H)([a-zA-Z]|(\d))?([a-zA-Z]|(\d))?/';
    preg_match($patronNombre,$this->nombre ,$coincidenciasNombre);
    preg_match($patronCedula,$this->cedula ,$coincidenciasCC);
    preg_match($patronCorreo,$this->correo ,$coincidenciasCorreo);
    preg_match($patronFb,$this->facebook ,$coincidenciasfb);
    if(!(in_array ($this->nombre, $coincidenciasNombre))){
        return "El nombre ingresado no cumple los requisitos solicitados";
    }else if(!(in_array ($this->cedula, $coincidenciasCC))){
        return "la cedula no cumple con los requisitos solicitados";
    }else if(!(in_array ($this->correo, $coincidenciasCorreo))){
        return "el correo no cumple con los requisitos solicitados";
    }else if($this->checkbox==="seleccionado"){
        if(!(in_array ($this->facebook, $coincidenciasfb)[0])){
            return "el facebook no cumple con los requisitos solicitados";
        }
    }else{
    return true;
    }
}
function agregarInscripcion(){
    $comprobacion=$this->comprobarDatos();
    if ($comprobacion===TRUE){
        if($this->checkbox==="seleccionado"){
        $this->inscrito=new inscrito($this->nombre, $this->correo, $this->cedula,$this->facebook);
        }else{
            $this->inscrito=new inscrito($this->nombre, $this->correo, $this->cedula);
        }
        $this->inscrito->añadirBaseDatos($this->checkbox==="seleccionado");
    }
    else{
        echo"<script>Alert.warning('$comprobacion', 'Error');</script>";
    }
}

}

?>