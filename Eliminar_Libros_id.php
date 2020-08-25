<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="Eliminar_estilo2.css">

<head>
	<title>VISTA ARCHIVO A ELIMINAR</title>
</head>
<body>
	<form action="Eliminar_Libros_id2.php" method="post">
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

	$sql = "select * from Libros where Titulo='$id'";
	$result = $conn->query($sql);

	echo("<h1>DATOS A ELIMINAR</h1>");

	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
			echo('<br>ID <br><input class="Entrada" type="text" name="id" value="'.$row["id"].'" readonly><br>');
			echo('TITULO <br><input class="Entrada" type="text" name="Titulo" value="'.$row["Titulo"].'" readonly><br>');
			echo('GENERO <br> <input class="Entrada" type="text" name="Genero" value="'.$row["Genero"].'"readonly><br>');
            echo('VOLUMENES <br><input class="Entrada" type="text" name="Duracion" value="'.$row["Volumenes"].'"readonly><br>');
            echo('CRITICA <br><input class="Entrada" type="text" name="Rating" value="'.$row["Critica"].'" readonly><br>');
			echo('AUTOR <br><input class="Entrada" type="text" name="Productora" value="'.$row["Autor"].'"readonly><br>');
			echo('FECHA DE PUBLICACION<br> <input class="Entrada" type="text" name="Protagonista" value="'.$row["Fecha_De_Publicacion"].'"readonly><br>');
			echo('<input class="Boton" type="submit" value="ELIMINAR"\>');
	} else {
		echo("0 Registros");
	}
	$conn->close();
?>
	</form>
</body>