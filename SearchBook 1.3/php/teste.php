<?php

$servername = "localhost";
$database = "searchbook";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $user = $_POST['user'];
  $password = $_POST['password']

  $conn = "INSERT INTO alunos('user', 'password') VALUES ('$user','$password')";
    
}
?>
<html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
  </head>
  <body>
    <form action="teste.php">
        <input type="text" name="user" required/>
        <input type="password" name="password" required/>
        <input type="submit"/>

    </form>
  </body>
</html>