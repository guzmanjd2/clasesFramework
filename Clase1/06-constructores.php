<?php include 'includes/header.php';

class Estudiante {
    private $codigo;
    private $nombre="";
    

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
      echo 'Desde el constructor';
    }

}

$estudiante1=new Estudiante();