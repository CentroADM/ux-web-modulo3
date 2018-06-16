// Estructuras de control



// if : evaluar una condicion


if( condicion a cumplir  ) {
  //realizar algo
}

// añadir un bloque else:

if( condicion a cumplir  ) {
  //realizar algo
} else {
  //realizar otra cosa
}

// añadir bloque elseif
if( condicion a cumplir  ) {
  //realizar algo
} else if ( otra condicion ) {
  //realizar otra cosa
} else {
  // si no se cumplieron las anteriores
}



// entrada a un club nocturno para mayores de edad

edad = 17

if ( edad >= 18 ) {

  console.log( "puede entrar" )

} else {

  console.log( "no puede entrar" )

}


// club todas las edades / menores no pueden beber

edad = 17
tieneBoleto = false
estasEnLaListaDeInvitados = true

if ( tieneBoleto || estasEnLaListaDeInvitados ) {

  console.log("puede entrar")

  if( edad >= 18) {

    console.log("puede beber")

  } else {

    console.log("no puede beber")

  }

} else {

  console.log( "no puede entrar")

}



// programa de astronautas

quieresSerAstronauta = true
midesMenosDe170 = false
tienesEntrenamiento = true

elPresidenteQuiereQueVayas = true


if( quieresSerAstronauta && midesMenosDe170 && tienesEntrenamiento ) {
  console.log("puedes ir al espacio")
} else {
  console.log("no puedes")
}

// anidando condiciones:

if( ( quieresSerAstronauta && midesMenosDe170 && tienesEntrenamiento ) || elPresidenteQuiereQueVayas ) {
  console.log("puedes ir al espacio")
} else {
  console.log("no puedes")
}





// SWITCH :


colorSemaforo = "verde"
// colorSemaforo = "amarillo"
// colorSemaforo = "rojo"


switch( colorSemaforo ) {

  case "verde" :

    acelerar()
    break;

  case "amarillo":

    if( velocidad < demasiadaVelocidad ) {
      frenar()
    } else {
      acelerar()
    }

    break;

  case "rojo":

    frenar()
    break;

  case "default" : // se cumple si ningún otro se da, o si no hacen 'break'

    console.log("estas en el auto");

}



// numero de dia de la semana 0-6

switch (new Date().getDay()) {
    case 4:
    case 5:
        text = "ya casi es fin";
        break;
    case 0:
    case 6:
        text = "es fin";
        break;
    default:
        text = "ya queremos que sea fin";
}
