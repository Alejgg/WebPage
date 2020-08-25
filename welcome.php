<?php
   include('session.php');
?>
<html>
<link rel="stylesheet" type="text/css" href="welcome_estilo.css">
   <head>
      <title>Bienvenido(a)</title>
   </head>
   <body class="img"></body>
   <body>
      <h1>Bienvenido(a) <?php echo $login_session; ?></h1> 
      <h2><a class="Cerrar" href = "logout.php">Cerrar sesión</a></h2>
      <a class="Inicio" href="peliculas.html">PELICULAS</a>
      <a class="Medio" href="series.html">SERIES</a>
      <a class="Final" href="libros.html">LIBROS</a>
   </body>
   
</html>