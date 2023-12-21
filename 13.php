<?php
include 'includes/header.php';
include 'DB.php';

//COMUNICAR 2 O MAS CLASES

class Empleado {
    //ATRIBUTOS DE MI CLASE
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    //METODOSO MAGICOS
    public  function __construct($nombre, $apellido, $departamento, $email, $codigo){ // En otros lenguajes como Java el constructor es la misma clase, en este caso seria Empleado
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

        // $this->nombreEmpleado();
    }

    /*
        Get - es para obtener un valor
        Set - modificar un valor
    */

    public function getNombre(){
        return $this->nombre; //siempre va a tener un return ya que va a devolver un valor
    }

    public function setNombre($nombre){ // tiene que tomar un nombre aqui para poderlo reescribir
        $this->nombre = $nombre;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getDepartamento(){
        return $this->departamento;
    }

    public function setDepartamento($departamento){
        $this->departamento = $departamanto;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    
}

// CON PUBLIC PUEDES ACCEDER EN CUALQUIER MOMENTO QUE NECESITES MODIFICAR O EXTRAER ALGO DEL CONSTRUCTOR
$hazael = new Empleado('Hazael', 'Flores', 'Dasc', 'hazaelfg', 006);
$nombre = $hazael->getNombre();
// echo $nombre;

$db = new DB($nombre);
$db->guardar();

// var_dump($db);