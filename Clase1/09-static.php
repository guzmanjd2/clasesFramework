<?php include 'includes/header.php';

//no se necesita instancia para acceder a el,
//sin necesidad de crear objeto

class DB 
{
    
    public static function conectar() {
        echo 'Se conecto exitosamente';
    }
}

DB::conectar();


/*$db=new DB();
$db->conectar();
var_dump($db);*/