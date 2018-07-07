<?php
require_once('Usuario.php');
class BaseDeDatosUsuarios {

    /** Arreglo estático que contendrá la
     * información de los usuarios activos
     * 'nombre':
     * 'contrasenia': contraseña cifrada hash('sha256','contraseña'); 
     * 'registro': fecha obtendia con date("F j, Y, g:i a"); 
     */
    public static $usuarios=[['nombre'=>'jhon'
        ,'contrasenia'=> '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'
        ,'registro'=>'June 30, 2018, 9:04 am',
    'correo'=>'jhon@correocaliente.com']
    
    ];

    public function __construct(){
        echo "Base inicializada\n";
    }
    /*Guarda la información del usuario en 
     * el arreglo de usuarios.
     * @param Usuario el usuario a guarda
     * @return bool- regresa verdadero en caso de éxito
     *               lanza una excepción si ya había un usuario con
     *               el mismo nombre. 
     */
    public function guarda(Usuario $u):bool{
        $arreglo = ['nombre' => $u->getNombre(),
                    'contrasenia'=>hash('sha256',$u->getContrasenia()),
                    'registro'=>date("F j, Y, g:i a"),
                    'correo'=>$u->getCorreo()];
        
        array_push(BaseDeDatosUsuarios::$usuarios,$arreglo);
        return true;
        
    }

    /* Actualiza la información del usuario
     * en el arreglo de usuarios activos.
     * @param Usuario el usuario a actualizar
     * @return bool- verdarero en caso de éxito
     *               lanza una excepción en caso de que no
     *              exista un usuario   
     */
    public function actualiza(Usuario $u):bool{
        foreach(BaseDeDatosUsuarios::$usuarios as &$usuario){
            if($usuario['nombre'] === $u->getNombre()){
                $usuario['correo'] = $u->getCorreo();
                $usuario['contrasenia'] = hash('sha256',$u->getContrasenia());
                 unset($usuario);
                return true;
            }
        }
        throw new Exception("No se encontro el usuario");
    }

    /* Borra al usuario del arreglo de los
     * usuarios activos.
     * @param Usuario el usuario a eliminar
     * @return bool- verdarero en caso de éxito
     *               lanza una excepción en caso de que no
     *              exista un usuario activo con esos datos.  
     */
    public function elimina(Usuario $u):bool{
        $n = sizeof(BaseDeDatosUsuarios::$usuarios);//tamanio
        $i = 0;
        while($i<$n){
            $usuario = BaseDeDatosUsuarios::$usuarios[$i];
            if($usuario['nombre']===$u->getNombre()){
                unset(BaseDeDatosUsuarios::$usuarios[$i]);
                return true;
            }
            $i++;
            
        }
        return false;
    }

    /** Regresa un arreglo y en cada entrada están contenidos cada uno de los 
     * usuarios.
     * @return array - contine objetos usuario 
     */
    public static function getUsuarios():array{
        $arreglo =  [];
        foreach(BaseDeDatosUsuarios::$usuarios as $u){
            $nuevo = new Usuario($u['nombre'],
                                 $u['contrasenia'],
                                 $u['correo']);
            array_push($arreglo,$nuevo);
        }
        return $arreglo;
    }

    /* Actualiza la contraseña del usuario en la propiedad del 
     * objeto y en la lista de los usuarios.
     * @param Usuario - el usuario con la nueva contraseña en texto plano
     *               ¡no olvidar cifrarla antes de guardarla!
     * @return bool- verdarero en caso de éxito
     *               lanza una excepción en caso de que no
     *              exista un usuario activo con esos datos.  
     */
    public function cambiaContrasenia(Usuario $u):bool{
        foreach(BaseDeDatosUsuarios::$usuarios as &$usuario){
            if($u->getNombre() === $usuario['nombre']){
                $usuario['contrasenia']= $u->getContrasenia();
                unset($usuario);
                return true;
            }
        }
        
        throw new Exception("No se encontro el usuario");
    }

    /* Busca al usuario por su nombre
     * @param string - el nombre del usuario con el cual lo buscaremos
     * @return Usuario- El usuario que encontramos, lanza una excepcion 
     *                  en caso de que no exsta el usuario con ese nombre. 
     */
    public function buscaUsuarioPorNombre(string $nombre):Usuario{
        $n = sizeof(BaseDeDatosUsuarios::$usuarios);//tamanio
        for($i=0;$i<$n;$i++){
           $usuario =  BaseDeDatosUsuarios::$usuarios[$i];
           if($usuario['nombre'] === $nombre){
               return new Usuario($usuario['nombre'],
                                  $usuario['contrasenia'],
                                  $usuario['correo']);
           } 
        }
        throw new Exception("No lo encontre");
    }

}

//echo hash('sha256','1234');
//echo date("F j, Y, g:i a");
/*
var_dump( BaseDeDatosUsuarios::$usuarios);
$bd  = new BaseDeDatosUsuarios();

$u = new Usuario("juan","qwerty","juan@correocaliente.com");
$bd->guarda($u);
var_dump( BaseDeDatosUsuarios::$usuarios);
$jhon = new Usuario('jhon','qwerty','jhon@hotmail.com');
$bd->actualiza($jhon);
var_dump( BaseDeDatosUsuarios::$usuarios);
$a = $bd->getUsuarios();
var_dump($a);
$bd->elimina($u);
var_dump( BaseDeDatosUsuarios::$usuarios);
$us= $bd->buscaUsuarioPorNombre("jhon");
$bd->cambiaContrasenia($us);
//var_dump( BaseDeDatosUsuarios::$usuarios);
*/