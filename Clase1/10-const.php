<?php

include 'includes/header.php';

class Estudiante {


    private $codigo;
    private $nombre="";
    const DUI = '13466-5';
    const GRUPO = 'DS-49';
    
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
    private $categoria;
   
}

echo 'DUI del usuario: ' . Estudiante::DUI . '<br>';
echo 'GRUPO ' . Estudiante::GRUPO;