<?php
/** Nombre de la clase
 * no puede empezar con puntos
 */

class Usuario{

    /*Atributos o propiedades de la clase*/
    /*Nombre de usuario*/
    private $nombre;
    /*Contrasenia de el usuario*/
    private $contrasenia;
    /*Correo de usuario*/
    private $correo;

    /** Constructor de la clase Usuario*/
    public function __construct(string $nombre, string $contrasenia,string $correo){
        $this->nombre = $nombre;
        $this->contrasenia = $contrasenia;
        $this->correo = $correo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getContrasenia(){
        return $this->contrasenia;
    }

    public function getCorreo(){
        return $this->correo;
    }

    

    public function __toString(){
        return "(Usuario: $this->nombre,\n Contrasenia: $this->contrasenia,\n$this->correo)\n";
        
    }
    
    
}

/**try{
    $u = new Usuario("jhon","1234");
    echo $u->toString();
}catch(TypeError $e){
    echo "no se pudo";
    }*/



