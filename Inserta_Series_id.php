<?php
	$ip = "localhost";
	$usr = "root";
	$pass = "459255";
	$bd = "Entretenimiento";
	
	$id = $_REQUEST['id'];
	$tit = $_REQUEST['Titulo'];
	$gen = $_REQUEST['Genero'];
    $dur = $_REQUEST['Duracion'];
    $rat = $_REQUEST['Rating'];
    $pro = $_REQUEST['Productora'];
    $prota = $_REQUEST['Protagonista'];
    $ori = $_REQUEST['Origen'];

	$conn = mysqli_connect($ip, $usr, $pass, $bd);
	if (!$conn){
		die("No se pudo conectar al servidor con los parámetros especificados.".mysqli_connect_error());
	}

	$sql = "insert into Series values('$id','$tit','$gen','$dur','$rat','$pro','$prota','$ori')";

	if (mysqli_query($conn, $sql)) {
		echo("<h1>Se ha agregado un registro a la base de datos.</h1>");
	}	else {
		echo("Error:".mysqli_error($conn));
	}
#BOTON INICIO
echo "<a href=\"series.html\" >[INICIO]</a>";
	mysqli_close($conn);
?>

<html>
<link rel="stylesheet" type="text/css" href="inserta_estilo2.css">
</html>
