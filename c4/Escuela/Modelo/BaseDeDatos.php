<?php
require_once('InterfaceBaseDeDatos.inc.php');

class BaseDeDatos implements InterfaceBaseDeDatos{
    
//Variable que contine la conexion a la base de datos.
    private $conexion;
    //constante que tiene la direccion del servidor
    const servername = "localhost";
    //constante que tiene el nombre del usurario de la base de datos
    const username = "developer";
    //constante que tienen la contrasenia de la base de datos.
    const password = "qwerty";
    //constante que tiene el nombre de la base de datos
    const base = "escuela";
    //Nombre de la tabla.
    private $tabla;
    
    /**
     * Constructor de la clase BaseDeDatos
     * Realiza la coneccion a la base de datos
     * @param nombre de la tabla
     */
    public function __construct(string $tabla){
        $this->tabla = $tabla;//inicializams el nombre de la tabla

        $host = "mysql:host=".self::servername.";dbname=".self::base; //servidor y nombre de la base de datos en mysql
        try {
            $this->conexion = new PDO($host, self::username, self::password); //realizamos la conexion
            // le decimos que lanze excepciones si exite un error.
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa\n";
            
            
        }
        catch(PDOException $e){
            echo "Conexion fallo: " . $e->getMessage();
            echo "\n";
        }
    }

    public function insert(stdClass $o):bool{
        $arr = get_object_vars($o);
        $columnas = implode(', ', array_keys($arr));
        $valores = implode('\', \'', array_values($arr));
        try{
            //   echo "INSERT INTO $this->tabla ($columnas) VALUES (' $valores ');";
            $this->conexion->query(
                "INSERT INTO $this->tabla ($columnas) VALUES (' $valores ');");
            return true;
        }
        catch(PDOException $e){
            echo "Conexion fallo: " . $e->getMessage();
            echo "\n";
            return false;
        }
    }

    public function update(stdClass $o):bool{
        return false;
    }
 
    public function exists(int $id):bool{
        return false;
    }

    public function delete(int $id):bool{
        return false;
    }
    
    public function all():array{
        return null;
    }

    public function select(int $id):stdClass{
        return null;
    }

}

