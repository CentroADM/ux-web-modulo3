/*comentarios*/

// de una sola linea

// comentarios
// multili-
// nea

// variables:

a + b = c

// variable se declara utulizando:
var unaVariable;

// le asignamos valor:
unaVariable = 15;

// el punto y coma es opcional
var otraVariable = 17

// incluso la palabra var es opcional
 tercerVariable = unaVariable + otraVariable


 // a una variable se le asigna un valor
 var nuevaVariable;

 // tipos de datos: JS es un lenguaje con tipos variables,
 // es decir, una bariable puede tener cualquier tipo de contenido

 // valores booleanos (cierto/falso)
 nuevaVariable = true
 nuevaVariable = false

 // valor nulo / hace que la variable este vacía
 nuevaVariable = null

// number

 // número entero
 nuevaVariable = 1

 // número con valor decimal
 nuevaVariable = 0.87

 // string: cadena de caracteres
nuevaVariable = "un valor de texto"


// Object:
// Sirve para variar mapear valores a nombres de propiedades

// objeto vacio
nuevaVariable = {}

nuevaVariable = {
  propiedad1: "valor 1"
  propiedad2: "valor 2"
  propiedad3: "valor 3"
}

// vamos a pedir un valor del objeto usando el nombre de  propiedad1
alert( nuevaVariable.propiedad1 )


var persona;

persona = {
  primer_nombre: "Carolina",
  apellidos: "Pérez Gutierrez",
  edad: 34,
  profesion: "abogada"
}


// introducir datos adicionales

// dos sintaxis posibles:
persona["estado_civil"] = "soltera"
persona.estado_civil = "casada"

console.log(persona);

// pedir un dato especifico:

console.log(persona.edad)



// Arrays o Arreglos
// secuencias ordenadas de datos

var arreglo = [1, 4, 8]

var frutas = ["piña", "manzana", "pera"]


// podemos preguntarle algunas cosas al array

// cantidad de elementos:
console.log( frutas.length )

// recuperar la primera fruta utilizando un índice

console.log( frutas[0] )

// segunda fruta:
console.log( frutas[1] )

// tercera fruta:
console.log( frutas[2] )

// cuarta fruta ( no existe - arroja "undefined" )
console.log( frutas[3] )
