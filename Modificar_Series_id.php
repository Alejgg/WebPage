<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="Modificar_estilo2.css">

<head>
	<title>VISTA ARCHIVO A MODIFICAR</title>
</head>
<body>
	<form action="Modificar_Series_id2.php" method="post">
<?php
	$ip = "localhost";
	$usr = "root";
	$pass = "459255";
	$nombreBd = "Entretenimiento";

	$id = $_REQUEST['Titulo'];

	$conn = new mysqli($ip, $usr, $pass, $nombreBd);
	if ($conn->connect_error){
		die("No se pudo conectar al servidor de base de datos. ".$conn->connect_error);
	}

	$sql = "select * from Series where Titulo='$id'";
	$result = $conn->query($sql);
	
	echo("<h1>DATOS A MODIFICAR</h1>");

	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
			echo('ID <br><input class="Entrada"  type="text" name="id" value="'.$row["id"].'" readonly><br>');
			echo('TITULO <br><input class="Entrada" type="text" name="Titulo" value="'.$row["Titulo"].'" readonly><br>');
			echo('GENERO <br><input class="Entrada" type="text" name="Genero" value="'.$row["Genero"].'"><br>');
            echo('TEMPORADAS <br><input class="Entrada" type="text" name="Duracion" value="'.$row["Temporadas"].'"><br>');
            echo('RATING <br><input class="Entrada" type="text" name="Rating" value="'.$row["Rating"].'"><br>');
			echo('CAPITULOS <br><input class="Entrada" type="text" name="Productora" value="'.$row["Capitulos"].'"><br>');
			echo('PROTAGONISTA <br><input class="Entrada" type="text" name="Protagonista" value="'.$row["Protagonista"].'"><br>');
			echo('ORIGEN <br><input class="Entrada" type="text" name="Origen" value="'.$row["Origen"].'"><br><br>');
			echo('<input class="Boton" type="submit" value="GUARDAR CAMBIOS"\>');
	} else {
		echo("0 Registros");
	}
	$conn->close();
?>
	</form>
</body>
