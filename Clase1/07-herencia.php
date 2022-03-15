<?php

 include 'includes/header.php';

class Estudiante {
    private $codigo=12345;
    private $nombre="Jose";
    

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

class EstudianteCursos extends Estudiante {

  protected $nota;

}

$estudianteCurso = new EstudianteCursos();
var_dump($estudianteCurso);