<?php
declare(strict_types=1);
/**
 * Función que recibe una cadena y devuelve un arreglo
 * conteniendo la longitud y la palabra mas chica
 * @param cadena - sucesión de palabras separadas por espacios
 * @return array - arreglo asociativo con llaves 'minima' que tenga la 
 *                 palabra mas chica y 'longitud' que tenga el numerito 
 *                 correspondiente a la longitud
 * 
*/

//explode ,strlen
function palabraMinima(string $cadena):array{
    $arr = explode(' ',$cadena); //arreglo
    $minimo = $arr[0];
    for($i=0;$i< sizeof($arr);$i++){
        if(strlen($minimo)> strlen($arr[$i])){
            $minimo =$arr[$i];
        }
    }
    $salida = ['minimo'=> $minimo,'longitud'=>strlen($minimo)];
    return $salida;
}

/**
 * Función que recibe un arreglo con una palabra y 
 * dos numero y hace una operación
 * @param valores - arreglo asociativo con tres llaves:
 *                 'op' que puede tener los valores de: suma, resta, 
 *                multiplicación, división.
 *                'op1' operando 1
 *                'op2' operando 2
 * @return float resultado de la operación
 * 
*/
function calcula(array $valores):float{
    $salida=0;
    switch($valores['op']){
    case 'suma':
        $salida = $valores['op1'] + $valores['op2'];
        break;
    case 'resta':
        $salida = $valores['op1'] - $valores['op2'];
        break;
    case 'divicion':
        $salida = $valores['op1'] / $valores['op2'];
        break;
    case 'multiplicacion':
        $salida = $valores['op1'] * $valores['op2'];
        break;
    default:
        throw new Exception( 'operacion no valida');
        break;
    }

    return $salida;
}


//var_dump(palabraMinima('hola mundo c'));
echo calcula(['op'=>'multiplicacion','op1'=>2.0,'op2'=>3.0]) . "\n";