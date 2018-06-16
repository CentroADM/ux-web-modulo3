<?php

define(
  'SITE_URL',
  'http://localhost/ux-web-modulo3/clase4/maquetado-componentes'
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Maquetado con Componentes</title>

  <!-- link -->
  <link rel="stylesheet"
  href="<?php echo SITE_URL; ?>/stylesheets/style.css">

</head>
<body>

  <!-- header#main-header -->
  <header id="main-header">

    <?php

      // incluir el menú
      include('main-menu.php');

    ?>


  </header>


  <main>
