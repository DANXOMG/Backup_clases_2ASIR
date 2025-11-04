<?php

//Declaracion de la clase
class Persona {

    //Atributos
    private $dni;
    private $nombre;
    private $apellidos;
    
    function __construct($dni, $nombre, $apellidos){
        $this->dni =$dni;
        $this->nombre =$nombre;
        $this->apellidos =$apellidos;
        
    }

    //Acceso a atributos

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }


    public function setSprllidos($apellidos){
        return $this->apellidos = $apellidos;
    }

    //Metodos de la clase

    public function __toString(){
        return "Persona: " . $this -> nombre . "  " . $this -> apellidos . "  " . "<br>";

    }
}

//Crear una persona
$per = new Persona("123456789", "Alberto", "Guzman");

//Mostrar datos de la persona
echo $per . "<br>";

//Obtener solo nombre
echo $per->getNombre() . "<br>";

//Modificar el nombre

$per -> setNombre("Antonio");

//Mostrar datos de la persona modificado
echo $per . "<br>";



?>