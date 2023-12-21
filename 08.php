<?php
include 'includes/header.php';

//AHORA VAMOS A VER LOS MODIFICADORES DE ACCESO

class Empleado {

    // PUBLIC, ACCESO EN CUALQUIER LUGAR
    // Protected, tienes acceso unicamente en la clase

    //ATRIBUTOS DE MI CLASE
    protected $nombre;
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


    // SIEMPRE QUE USES PROTECTED VAS A TENER QUE CREAR METODOS PARA ACCEDER O MODIFICAR LOS PARAMETROS, COMO VES EN ESTOS EJEMPLOS TANTO DE ESCRITURA COMO PARA ACCEDER A ELLOS EN LA INSTANCIA

    public function obtenerNombre(){
        return $this->nombre;
    }

    // esto es en caso de que yo quiera modificar el nombre o cualquier atributo de la clase como el nombre, el departamento, etc

    public function cambiarNombre($nombre){ // tiene que tomar un nombre aqui para poderlo reescribir
        $this->nombre = $nombre;
    }
}

// CON PUBLIC PUEDES ACCEDER EN CUALQUIER MOMENTO QUE NECESITES MODIFICAR O EXTRAER ALGO DEL CONSTRUCTOR
$hazael = new Empleado('Hazael', 'Flores', 'Dasc', 'hazaelfg', 006);

$hazael->cambiarNombre("yeyo");

echo $hazael->obtenerNombre();
echo "<pre>";
var_dump($hazael);
echo "<pre>";
