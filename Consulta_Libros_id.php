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
    #TITULO
	echo("<h1>LIBRO CONSULTADO</h1>");
    #BOTON INICIO
    echo "<a href=\"libros.html\" >[INICIO]</a>"; 
    #IMPRIMIR VALORES
	if ($result->num_rows > 0){
		echo("<body><div><table border='5'>");
        echo("<tr><th>NUMERO</th><th>TITULO</th><th>GENERO</th><th>VOLUMENES</th>
                <th>CRITICA</th><th>AUTOR</th><th>FECHA DE PUBLICACION</th></tr>");
		while($row = $result->fetch_assoc()){
            echo("<tr><td>".$row["id"]."</td><td>".$row["Titulo"]."</td><td>".$row["Genero"]."</td><td>".$row["Volumenes"]."</td>
            <td>".$row["Critica"]."</td><td>".$row["Autor"]."</td><td>".$row["Fecha_De_Publicacion"]."</td></tr>");
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