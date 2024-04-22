<?php
$errorConn = false;
$errorUserJaExiste = false;
$errorEmailJaUtilizado = false;
$errorSenhasDiferentes = false;
$erroruserorpassword = false;

try {
  include("conexão.php");

  if ($_POST) {
    $Senha = $_POST["Senha"];
    if ($Senha == "") {
      $mensagem = "";
    } 
    elseif ($Senha == $Senha) { 
      $Nomeds_aluno = filter_input(INPUT_POST,"Nomeds_aluno",FILTER_SANITIZE_SPECIAL_CHARS);
      $Senha = filter_input(INPUT_POST, "Senha", FILTER_SANITIZE_SPECIAL_CHARS);
      

      $sql1 = "SELECT Nomeds_aluno from alunos where Nomeds_aluno = '{$Nomeds_aluno}'"; 
      $select = mysqli_query($conn, $sql1);
      
      //se ja existir algum correspondente
      if (mysqli_num_rows($select) > 0){
        $linha = mysqli_fetch_assoc($select);
        //se for o msm usuario
        if ($linha['Nomeds_aluno'] == $Nomeds_aluno){
          $errorUserJaExiste = true;
          
        }
      }
      else{
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO alunos (Nomeds_aluno, Senha) VALUES
                    ('$Nomeds_aluno','$hash')";

        mysqli_query($conn, $sql);
        
        header("location: index.php");
      }
    }
    else{
      $errorSenhasDiferentes = true;

    }
  }
  mysqli_close($conn);
} 
catch (Exception $e) {
  $errorConn = true;
  echo $e;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
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
        <img src="../Imgs/Bibliophile-bro.svg" />
      </div>
      <div class="card-right">
        <div class="login">
          <h1>Cadastre-se</h1>
          <form action="cadastro.php" method="POST">
            <div class="input-email">
              <input name="Nomeds_aluno" autocomplete="off" type="text" required />
              <i class="fa-solid fa-user"></i>
              <span>Usuário</span>
            </div>
            <div class="input-senha">
              <input name="Senha" autocomplete="off" type="password" required />
              <i class="fa-solid fa-key"></i>
              <span>Senha</span>
            </div>
            <div class="input-submit">
              <input type="submit" />

            Já tem conta? Faça <a href="index.php">login</a>
          </form>
        </div>
      </div>
    </div>

    <footer><a href="../Html/direitos.html">Direitos Autorais</a></footer>
  </body>
</html>
