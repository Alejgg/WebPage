<?php
   include("config.php");
   session_start();
   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Su usuario o contraseña es incorrecto";
      }
   }
?>
<html>
<link rel="stylesheet" type="text/css" href="login_estilo.css">
<div class="login">
  <h1>Entretenimiento</h1>
  <form method="post" action="">
    <input type = "text" name = "username" placeholder="Username" class = "box"/><br /><br />
    <input type = "password" name = "password" placeholder="Password" class = "box" /><br/><br />      
    <input type = "submit" value = "Entrar" class="btn"/><br />
  </form>
         <h3>Integrantes del equipo: <br><br>
            ---> Dulce Karina Valles Espinosa <br>
            ---> Alejandro Galvan Garcia <br>
            ---> Aldo Uriel Gurrola Quinones <br> <br>

            Unipoli IRT 6-B
         </h3>
      
</div>
</html>