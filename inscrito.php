<?php

require 'Medoo.php';

use Medoo\Medoo;

class inscrito {

    private $id;
    private $nombre;
    private $correo;
    private $cedula;
    private $facebook;
    private $database;

    function __construct($nombre, $correo, $cedula, $facebook = null) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->cedula = $cedula;
        $this->facebook = $facebook;
        $this->database = new Medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => 'validacion',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
        ]);
        $this->id = ($this->database->max("inscritos", "id")) + 1;
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

    function añadirBaseDatos($fb = false) {
        echo "nombre " . $this->nombre;
        echo"<br>";
        echo "correo " . $this->correo;
        echo"<br>";
        echo "cedula " . $this->cedula;
        echo"<br>";
        echo "nombre " . $this->nombre;
        echo"<br>";
        echo "id " . $this->id;
        echo"<br>";

        if ($fb) {
            $this->database->insert("inscritos", ["nombre" => $this->nombre, "correo" => $this->correo, "cedula" => $this->cedula, "facebook" => $this->facebook, "id" => $this->id]);
        } else {
            $this->database->insert("inscritos", ["nombre" => $this->nombre, "correo" => $this->correo, "cedula" => $this->cedula, "id" => $this->id]);
        }
    }

}

?>
