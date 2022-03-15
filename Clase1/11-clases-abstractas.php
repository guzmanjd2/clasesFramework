<?php

use EstudianteCursoLibre as GlobalEstudianteCursoLibre;

 include 'includes/header.php';

abstract class Estudiante {

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
    protected $categoria;
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
      $this->categoria=$categoria;
    }
}

/*$estudiante1= new Estudiante();
var_dump($estudiante1);*/

$estudiante2= new EstudianteCursoLibre();
var_dump($estudiante2);

//las clases que se hereden de la clase abstracta si se pueden
//imprimir, mas no la clase abstracta porque no se puede 
//heredar.

