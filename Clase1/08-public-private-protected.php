<?php
 include 'includes/header.php';

class Estudiante {

    private $codigo=0;//Desde el objeto con get y set
    private $nombre="";
    public $nota=0;//Desde cualquier parte del archivo, desde el objeto o la clase
    protected $edad;//Unicamente desde la clase

    
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCodigo($codigo)
    {
      $this->codigo=$codigo;
    }
    public function setNombre($nombre)
    {
      $this->nombre=$nombre;
    }

    public function __construct()
    {

    }
}
class EstudianteCursoLibre extends Estudiante
{
    
}
// Instanciar una clase
$estudiante1=new Estudiante();
$estudiante1->nota = 9;
$estudianteCurso=new EstudianteCursoLibre();
var_dump($estudiante1);



