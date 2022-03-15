<?php include 'includes/header.php';

class Estudiante {
    public $codigo=0;
    public $nombre="";
   

    public function obtenerDatos() {
        echo 'desde una funcion';
    }
 
    public function obtenerDatos2() {
     echo '<br>'.'codigo:'.$this->codigo;
    }
}
// Instanciar una clase
$estudiante1=new Estudiante();
$estudiante1->obtenerDatos();
$estudiante1->obtenerDatos2();
var_dump($estudiante1);