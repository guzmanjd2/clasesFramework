<?php include 'includes/header.php';

require_once 'Estudiante.php';

echo '<br>';

class Estudiante
{
    public function __construct()
    {
        echo 'Desde el constructor';
    }
}

$estudinate1 = new Estudiante();