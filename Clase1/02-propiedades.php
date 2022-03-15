<?php include 'includes/header.php';

class Estudiante
{
   //Propiedades
   public $codigo=0;
   private $nombre='';

}

$estudiante1=new Estudiante();
$estudiante1->codigo=12345;
//$estudiante1->nombre='Maria';
//$estudiante1->carrera='Desarrollo de software'+'<br>';
$estudiante1->obtenerDatos();
$estudiante1->obtenerDatos2();
var_dump($estudiante1);