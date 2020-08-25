<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="Eliminar_estilo3.css">
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "459255";
$dbname = "Entretenimiento";
#BOTON INICIO
echo "<a href=\"series.html\" >[INICIO]</a>";
$tit = $_REQUEST['Titulo'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// DELETE FROM <table> WHERE <column> = <value>
$sql = "DELETE FROM Series WHERE Titulo='$tit'";
echo("<div>");
if ($conn->query($sql) === TRUE) {
  echo "<h1>Valor eliminado</h1>";
} else { 
  echo "<h1>Error al eliminar" . $conn->error."/>";
}

echo("</div>");
$conn->close();
?> 
</body>
</html>