<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="Eliminar_estilo2.css">

<head>
	<title>VISTA ARCHIVO A MODIFICAR</title>
</head>
<body>
	<form action="Eliminar_Peliculas_id2.php" method="post">
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

	$sql = "select * from Peliculas where Titulo='$id'";
	$result = $conn->query($sql);

	echo("<h1>DATOS A ELIMINAR</h1>");

	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
			echo('<br>ID <br><input class="Entrada" type="text" name="id" value="'.$row["id"].'" readonly><br>');
			echo('TITULO <br><input class="Entrada" type="text" name="Titulo" value="'.$row["Titulo"].'" readonly><br>');
			echo('GENERO <br> <input class="Entrada" type="text" name="Genero" value="'.$row["Genero"].'"readonly><br>');
            echo('DURACION <br><input class="Entrada" type="text" name="Duracion" value="'.$row["Duracion"].'"readonly><br>');
            echo('RATING <br><input class="Entrada" type="text" name="Rating" value="'.$row["Rating"].'" readonly><br>');
			echo('PRODUCTORA <br><input class="Entrada" type="text" name="Productora" value="'.$row["Productora"].'"readonly><br>');
			echo('PROTAGONISTA<br> <input class="Entrada" type="text" name="Protagonista" value="'.$row["Protagonista"].'"readonly><br>');
			echo('ORIGEN <br><input class="Entrada" type="text" name="Origen" value="'.$row["Origen"].'"readonly><br><br>');
			echo('<input class="Boton" type="submit" value="ELIMINAR"\>');
	} else {
		echo("0 Registros");
	}
	$conn->close();
?>
	</form>
</body>