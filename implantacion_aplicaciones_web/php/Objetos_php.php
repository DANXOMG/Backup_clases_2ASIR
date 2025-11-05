<?php

//Definicion de clase
class Persona{
    //atributos
    private $dni;
    private $nombre;
    private $apellidos;

    function __construct($dni, $nombre, $apellidos){
        $this -> dni = $dni;
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos; 
    }

    // Acceso atributos

    public function getNombre(){
        return $this -> nombre;
    }

    public function getApellidos(){
        return $this -> apellidos;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function setApellidos($apellidos){
        $this -> apellidos = $apellidos;
    }

    public function __tostring(){
        return "Persona: ". $this -> nombre . "  " . $this -> apellidos;
    }

}

// Declaracion de la clase cliente

class Cliente extends Persona{
    //Atributos
    private $saldo;

    function __construct($dni, $nombre, $apellidos,$saldo){
        parent::__construct($dni, $nombre, $apellidos);
        $this -> saldo = $saldo;
    }

    public function getSaldo() {
        return $this -> saldo;
    }

    public function setSaldo($saldo) {
        $this -> saldo = $saldo;
    }

    public function __tostring(){
        return "cliente: ". $this -> getNombre(). "  " . $this -> getSaldo();
    }

}

$cli = new Cliente("12312312S","Pedro","Sanchez",1200);

?>
