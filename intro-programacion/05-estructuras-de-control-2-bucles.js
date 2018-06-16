/*
BUCLES

nos permiten repetir una operación un número de veces

*/


// while

// se repetirá un bloque de código
// mientras una condición se cumpla

var total = 10;

while ( total > 0 ) {
  total--;
  console.log( "ahora el total es", total);
}






// for

// definir cuantas veces queremos realizar algo

// for ( valor inicial; condicion; incremento )
for( var i = 0; i < 10; i++ ) {
  console.log( "ahora i es:", i )
}


// for con decremento:
for( var i = 10; i > 0; i-- ) {
  console.log( "ahora i es:", i )
}



// for con un arreglo

frutas = [ "piña", "manzana", "pera", "fresa" ]

for( var i = 0; i < frutas.length; i++ ){
  console.log("siguiente fruta:", frutas[i] )
}


// forEach: mejor para trabajar con arreglos

frutas.forEach( function(fruta) {
  console.log("siguiente fruta:", fruta )
})


// iterar un arreglo usando while (destructivo)

while( frutas.length > 0 ) {
  // extraemos la última fruta del arreglo:
  console.log( "la siguiente fruta es:", frutas.pop() )
}
