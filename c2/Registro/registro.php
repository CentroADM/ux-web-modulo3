\<?php
require_once('Usuario.php');
require_once('BaseDeDatosUsuarios.php');


$ciclo = true;
$bdu = new BaseDeDatosUsuarios();

while($ciclo){
    echo "Opciones:\n";
    echo "1.Guardar usuario\n 2.Borrar Usuario\n 3. ver Usuarios\n 4. actualizar Usuario\n 5.salir\n";
    $opcion = readline("opcion : ");
    switch($opcion){
    case 1 :
        $nombre = readline('Escriba el nombre del usuario: ');
        $contrasenia = readline('Escriba la constrasenia del usuario: ');
        $correo = readline('Escriba el correo del usuario: ');
        $usuario = new Usuario($nombre,$contrasenia,$correo);
        try{
            $exito = $bdu->guarda($usuario);
            if($exito){
                echo "Se guardo correctamente\n";
            }
        }catch(Exception $e){
            echo $e->getMessage()."\n";
        }
        break;
    case 2:
        $nombre = readline('Escriba el nombre del usuario a borrar: ');
        try{
        $u = $bdu->buscaUsuarioPorNombre($nombre);
        }catch(Exception $e){
            echo $e->getMessage()."\n";
        }
        if($bdu->elimina($u)){
            echo "Se borro correctamente\n";
        }else{
            echo "Algo paso\n";
        }
        break;
    case 3:
        $a = $bdu->getUsuarios();
        foreach($a as $us){
            echo $us."\n";
        }
        break;
    case 4:
        $nombre = readline('Escriba el nombre del usuario a actualizar ');
        $contrasenia = readline('Escriba la constrasenia del usuario: ');
        $correo = readline('Escriba el correo del usuario: ');
        $usuario = new Usuario($nombre,$contrasenia,$correo);
        try{
            $u = $bdu->buscaUsuarioPorNombre($nombre);
        }catch(Exception $e){
            echo $e->getMessage()."\n";
            break;
        }
        try{
            if($bdu->actualiza($usuario)){
                echo "Se actualizo correctamente\n";
            }
        }catch(Exception $e){
            echo "$e->getMessage()."\n"";
        }
        break;
    case 5:
        echo "Adios\n";
        $ciclo=false;
        break;
    default:
        echo "No existe esa opcion\n";
    }



}
    