<?php
include 'includes/header.php';


//AHORA VAMOS A VER EL TIPADO EN PHP

//Instanciar una clase
class Empleado {

    //ATRIBUTOS DE MI CLASE
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //METODOSO MAGICOS
    public  function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo){ // En otros lenguajes como Java el constructor es la misma clase, en este caso seria Empleado
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

}

$hazael = new Empleado('Hazael', 'Flores', 'Dasc', 'hazaelfg', 006);
$yeya = new Empleado('Andrea', 'Trasvina', 'Dasc', 'alucero', '007');



echo "<pre>";
var_dump($hazael);
echo "<pre>";

echo "<pre>";
var_dump($yeya);
echo "<pre>";