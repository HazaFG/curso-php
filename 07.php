<?php
include 'includes/header.php';

//AHORA VAMOS A VER LOS CONSTRUCTORES

//Metodos (Los metodos son funciones pero como los metemos en una clase se llaman metodos)
class Empleado {

    //ATRIBUTOS DE MI CLASE
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //METODOSO MAGICOS
    public  function __construct($nombre, $apellido, $departamento, $email, $codigo){ // En otros lenguajes como Java el constructor es la misma clase, en este caso seria Empleado
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

        // $this->nombreEmpleado();
    }

    // LOS METODOS SON FUNCIONES QUE ESTAN DENTRO DE LA CLASE Y QUE PODEMOS USAR PARA DEVOLVERNOS UN VALOR
    public function nombreEmpleado(){
        echo $this->nombre . " " . $this->apellido;
    }


    public function departamentoEmpleado(){
        echo $this->departamento;
    }

}


$hazael = new Empleado('Hazael', 'Flores', 'Dasc', 'hazaelfg', 006);
// $hazael ->nombreEmpleado();
$yeya = new Empleado('Andrea', 'Trasvina', 'Dasc', 'alucero', 007);
// $yeya ->nombreEmpleado();



echo "<pre>";
var_dump($hazael);
echo "<pre>";

echo "<pre>";
var_dump($yeya);
echo "<pre>";

// echo $hazael->nombreEmpleado();
// echo $yeya->nombreEmpleado();

echo $hazael->departamentoEmpleado();