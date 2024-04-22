<?php

$errorConn = false;
$erroruserorpassword = false;

include("conexão.php");
session_start();

if (isset($_POST['enviar'])) {


  if (strlen($_POST['user']) == 0) {
    echo "Preencha seu usuario";
  } else if (strlen($_POST['password']) == 0) {
    echo "Preencha sua senha";
  } else {

    $user = $conn->real_escape_string($_POST['user']);
    $senha = $conn->real_escape_string($_POST['password']);

    $sql_code = "SELECT * FROM alunos WHERE user = '$Nomeds_aluno'";

    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

    $linha = $sql_query->fetch_assoc();

    $quantidade = $sql_query->num_rows;
    $senhaHash = $linha['password'];
    
    if ($quantidade >= 1 and password_verify($senha, $senhaHash)) {

      $usuario = $linha['user'];
      
      $_SESSION['user'] = $usuario;
      mysqli_close($conn);
      header("Location: ../Html/home.html");
    } else {
      $erroruserorpassword = true;
      echo '';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link type="text/css" rel="stylesheet" href="../Css/style.css" />
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <header>
      <h4>SearchBook</h4>
      <a id="inicio" href="../Html/home.html">Início</a>
      <a id="sobre" href="style">Sobre</a>
    </header>
    <div class="container">
      <div class="card-left">
        <img src="/Imgs/Bibliophile-bro.svg" />
      </div>
      <div class="card-right">
        <div class="login">
          <h1>Login</h1>
          <form action="../Html/home.html" method="post">
            <div class="input-email">
              <input name="user" autocomplete="off" type="text" required />
              <i class="fa-solid fa-user"></i>
              <span>Usuário</span>
            </div>
            <div class="input-senha">
              <input name="password" autocomplete="off" type="password" required />
              <i class="fa-solid fa-key"></i>
              <span>Senha</span>
            </div>
            <div class="input-submit">
              <input type="submit" value="Enviar" />
            </div>
            Não tem conta? <a href="cadastro.php">cadastre-se</a>
          </form>
        </div>
      </div>
    </div>

    <footer><a href="../Html/direitos.html">Direitos Autorais</a></footer>
  </body>
</html>
