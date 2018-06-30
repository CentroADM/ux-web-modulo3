\<?php
require_once('Usuario.php');
require_once('BaseDeDatosUsuarios.php');


$ciclo = true;
$bdu = new BaseDeDatosUsuarios();

while($ciclo){
    echo "Opciones:\n";
    echo "1.Guardar usuario\n 2.Borrar Usuario\n 3. Salir\n";
    $opcion = readline("opcion : ");
    switch($opcion){
    case 1 :
        $nombre = readline('Escriba el nombre del usuario: ');
        $contrasenia = readline('Escriba la constrasenia del usuario: ');
        $usuario = new Usuario($nombre,$contrasenia);
        $exito = $bdu->guarda($usuario);
        if($exito){
            echo "Se guardo correctamente\n";
        }else {
            echo "algo fallo\n";
        }
        break;
    case 2:
        echo "no implementado";
        break;
    case 3:
        echo "Adios\n";
        $ciclo=false;
        break;
    default:
        echo 'No existe esa oopcion';
    }



}
    