<?php
$servername = "localhost";
$username = "root";
$password = "459255";
$dbname = "Entretenimiento";

    $id = $_REQUEST['id'];
  	$tit = $_REQUEST['Titulo'];
 	$gen = $_REQUEST['Genero'];
    $dur = $_REQUEST['Duracion'];
    $rat = $_REQUEST['Rating'];
    $pro = $_REQUEST['Productora'];
    $prota = $_REQUEST['Protagonista'];
#BOTON INICIO
echo "<a href=\"libros.html\" >[INICIO]</a>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE Libros SET Genero='$gen', Volumenes='$dur', Critica='$rat', Autor='$pro', Fecha_De_Publicacion='$prota' WHERE Titulo='$tit'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Registro actualizado</h1>";
} else {
  echo "<h1>Error actualizando el registro: " . $conn->error."/>";
}

$conn->close();
?> 

<html>
<link rel="stylesheet" type="text/css" href="inserta_estilo2.css">
</html>