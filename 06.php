<?php
include 'includes/header.php';


//AHORA VAMOS A VER UN CONSTRUCTOR PROPERTY PROMOTION

//Instanciar una clase
class Empleado {
    //METODOSO MAGICOS
    public  function __construct(
        //ATRIBUTOS DE MI CLASE
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){ 

    }

}

$hazael = new Empleado('Hazael', 'Flores', 'Dasc', 'hazaelfg', 006);
$yeya = new Empleado('Andrea', 'Trasvina', 'Dasc', 'alucero', 007);



echo "<pre>";
var_dump($hazael);
echo "<pre>";

echo "<pre>";
var_dump($yeya);
echo "<pre>";