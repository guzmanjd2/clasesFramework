<?php
//Se coloca al inicio, no al final o enmedio
namespace estudiante_1;

class Estudiante
{
    public function __construct()
    {
        echo 'Desde el constructor clase ';
    }
}

$estudinate1 = new Estudiante();