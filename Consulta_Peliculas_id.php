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
    #TITULO
	echo("<h1>PELICULA CONSULTADA</h1>");
    #BOTON INICIO
    echo "<a href=\"peliculas.html\" >[INICIO]</a>"; 
    #IMPRIMIR VALORES
	if ($result->num_rows > 0){
		echo("<body><div><table border='5'>");
        echo("<tr><th>NUMERO</th><th>TITULO</th><th>GENERO</th><th>DURACION</th>
                <th>RATING</th><th>PRODUCTORA</th><th>PROTAGONISTA</th><th>ORIGEN</th></tr>");
		while($row = $result->fetch_assoc()){
            echo("<tr><td>".$row["id"]."</td><td>".$row["Titulo"]."</td><td>".$row["Genero"]."</td><td>".$row["Duracion"]."</td>
            <td>".$row["Rating"]."</td><td>".$row["Productora"]."</td><td>".$row["Protagonista"]."</td><td>".$row["Origen"]."</td></tr>");
		}
        echo("</table></div></body>");
        
	} else {
		echo("0 Registros");
    }
    
	$conn->close();
?>

<html>
<link rel="stylesheet" type="text/css" href="Consulta_estilo2.css">
</html>