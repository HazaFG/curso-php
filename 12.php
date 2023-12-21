<?php
include 'includes/header.php';

//METODOS ESTATICOS

class Empleado {

    // PUBLIC, ACCESO EN CUALQUIER LUGAR
    // Protected, tienes acceso unicamente en la clase

    //ATRIBUTOS DE MI CLASE
    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //METODOSO MAGICOS
    public  function __construct($nombre, $apellido, $departamento, $email, $codigo){ // En otros lenguajes como Java el constructor es la misma clase, en este caso seria Empleado
        self::$nombre = $nombre;
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

    public static function obtenerEmpleado(){
        echo "Desde metodo estatico";
    }

    public static function getNombre(){
        return self::$nombre;
    }
}


// Empleado::obtenerEmpleado();
$hazael = new Empleado('Hazael', 'Flores', 'Dasc', 'hazaelfg', 006);
echo $hazael::getNombre();


echo "<pre>";
var_dump($hazael);
echo "<pre>";
