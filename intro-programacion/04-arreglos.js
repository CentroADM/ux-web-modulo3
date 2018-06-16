
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



// Métodos de arreglos

// introducir algo en un arreglo


// al final:
frutas.push("uva")


// al principio
frutas.shift("plátano")


// Eliminar el último elemento de un arreglo: nos devuelven dicho elemento
ultimaFruta = frutas.pop()


// Eliminar el primer elemento de un arreglo: nos devuelven dicho elemento
primeraFruta = frutas.shift()



/* EJEMPLO : Rifa */

var participantes = Array()

participantes.push({
  nombre: 'Pedro'
})
participantes.push({
  nombre: 'Rosa'
})
participantes.push({
  nombre: 'Ernesto'
})
participantes.push({
  nombre: 'Juana'
})


// realizar rifa:
numeroParticipantes = participantes.length;

// crear número aleatorio entre 0 y 1
azar = Math.random()

// interpolar a número de participantes
azarInterpolado = azar * numeroParticipantes

// redondear hacia abajo (pues arreglos empiezan a contar desde 0)
indice = Math.floor( azarInterpolado )

// seleccionar ganador:

console.log( "persona ganadora:", participantes[ indice ].nombre )
