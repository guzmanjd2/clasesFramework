<?php include 'includes/header.php';

class Estudiante {

    private $codigo;
    private $nombre="";
    

    public function getCodigo(){
        return $this->codigo;
    }
   
    public function getNombre(){
        return $this->nombre;
    }

    public function setCodigo($codigo) {
        $this->codigo=$codigo;
    }
    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }
}
// Instanciar una clase
$estudiante1=new Estudiante();
//$estudiante1->getNombre();
$estudiante1->setCodigo(123458);
var_dump($estudiante1->getCodigo());