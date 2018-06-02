/* multiplicar bullets */

// seleccionamos el PRIMER bullet
var bullet = $('#home-bullets .bullet').first()

// creamos una copia
var clonedBullet;

// añadimos dos copias a la lista de bullets
for( var i = 0; i < 2; i++ ) {

  clonedBullet = bullet.clone()
  $('#home-bullets ul').append( clonedBullet )

}
