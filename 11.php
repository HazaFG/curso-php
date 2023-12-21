<?php
include 'includes/header.php';

//vamos a ver como activar la herencia y que problemas puede ayudar a solucionar o tambien a ahorrar codigo

//Clases abstractas
abstract class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;;
    }

    public function mostrarInformacion(){
        echo "Nombre:" . $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }

    public function getTelefono(){
        return $this->telefono;
    }
}

//Herencia
class Empleado extends Persona{

    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento){
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}

class Proveedor extends Persona{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa){
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }
}

// $persona = new Persona ('Persona', 'Un apellifo', 'persona@gmail', 5557776);

$empleado = new Empleado('hazael', 'flores', 'hazaelfg', '63435343', 021, 'dasc');
$proveedor = new Proveedor('Yeya', 'flores', 'yeyaprololxd', '5644745', 'Tik tok');


// echo "<pre>";
// var_dump($persona);
// echo "<pre>";

echo "<pre>";
var_dump($empleado);
echo "<pre>";

echo "<pre>";
var_dump($proveedor);
echo "<pre>";

$empleado->mostrarInformacion();
echo "<br>";
$proveedor->mostrarInformacion();

echo "<br>";

echo $proveedor->getTelefono();