// operadores



// operadores aritméticos (para números)

// suma

a + b

// resta

a - b


// multiplicación

a * b


// división

a / b


// operador módulo - calcula el residuo tras una división

a % b


// contar del 0 al 9 usando modulo 4 (% 4)

0 - 0
1 - 1
2 - 2
3 - 3
4 - 0
5 - 1
6 - 2
7 - 3
8 - 0
9 - 1


// potencia

a ** b

2 ** 2 = 4

// este es el modo recomendado (usando libreria Math):

Math.pow( 2, 2 ) = 2 ** 2



// raíz cuadrada

Math.sqrt( 4, 2 )




// operadores de asignación

// asignar un valor
a = b

// asignacion de valores tras operacion aritmetica:
a = a + b

//equivalente:
a += b



// también aplica para otras operaciones
a-=b
a*=b
a/=b


// operadores de incremento: incrementar una unidad

a++ // sumamos uno al valor anterior
a-- // restamos uno al valor anterior



numero = 8
numero++ // resultado: 9

numero = 8
numero-- // resultado: 7




// Operadores de comparación: arrojan 'true' o 'false'

// sirven para describir una condición que se puede cumplir, o no

// menor que
a < b

3 < 4


// mayor que

a > b


// menor o igual que

a <= b

// mayor o igual que

a >= b


// igual que

a == b

// identico a :

a === b

3 === 3 // true
3 === "3" // false


// distinto que

a != b

3 != 4 // true

4 != 4 // false



// operadores lógicos

// && - AND - se deben cumplir ambas condiciones

( a < b ) && ( b > c )

( 3 < 4 ) && ( 7 < 6 ) // false

// || - OR - se debe cumplir al menos una de las dos

( a > b ) || ( b > c )

( 3 < 4 ) || ( 7 < 6 ) // true

// ! NOT - se niega una condicion

!( a > b )

! ( 3 < 4 ) // false
