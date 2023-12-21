<?php
include 'includes/header.php';


//Instanciar una clase
class Empleado {

    //ATRIBUTOS DE MI CLASE
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado = new Empleado;

//Si veo una flecha significa que estoy accediendo a los atributos de mi clase
$empleado -> nombre = "Hazael";
$empleado -> apellido = "Flores";

echo "<pre>";
var_dump($empleado);
echo "<pre>";



$empleado2 = new Empleado;

//Si veo una flecha significa que estoy accediendo a los atributos de mi clase
$empleado2 -> nombre = "Andrea";
$empleado2 -> apellido = "Trasvina";

echo "<pre>";
var_dump($empleado2);
echo "<pre>";