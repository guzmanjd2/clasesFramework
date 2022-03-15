 <?php include 'includes/header.php';

interface EstudianteInterface
{
    public function getCodigo();
   // public function getNombre();
   // public function insertar();
}

class Estudiante implements EstudianteInterface{

    private $codigo=0;
    private $nombre="";
    
    public function getCodigo():int
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
}
