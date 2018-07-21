<?php

class Alumno{
    private $id;
    private $edad;
    private $nombre;
    private $correo;
    private $genero;
    
    public function __construct(int $edad,
    string $nombre,
    string $correo,
    string $genero)
    {
        $this->edad = $edad;
        $this->nombre=$nombre;
        $this->correo =$correo;
        $this->genero =$genero;
    }

    public function getEdad(){
        return $this->edad;
        
    }

    public function getNombre(){
        return $this->nombre;
        
    }

    public function getCorreo(){
        return $this->correo;
        
    }

    public function getGenero(){
        return $this->genero;
        
    }
    
    public function getId(){
        return $this->id;
        
    }
    public function setId(int $id){
        $this->id =$id;
        
    }
    
        
    
    
    
}