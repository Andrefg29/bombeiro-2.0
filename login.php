<?php

if(isset($_GET["login"])){
  $login = $_GET["login"];
  if($login == 0){
    echo("<script>
    function alerta()
    {
      alert('Email ou Senha incorretos')
    }
    </script>");
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça Login - Bombeiros Voluntários</title>
    <link href="css/login.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/Logo.png">
    <script src="https://kit.fontawesome.com/f87260a7c7.js" crossorigin="anonymous"></script>
</head>
<body onload="alerta();">

    

    <div class="caixacadastro">
        <br>
        <h2>Faça Login</h2>
        <form method="post" action="pesquisa.php">
        <div class="input">
            <span class="fa fa-envelope"></span>
            <input type="text" name="email" placeholder="Email" id="email" onkeyup="Email();" required="required" >
        </div>
        <div class="input">
            <span class="fa-solid fa-address-card"></span>
            <input type="text" name="cpf" placeholder="CPF" id="cpf" onkeyup="cpf();" required="required" >
        </div>
        <div class="input">
            <span class="fa fa-lock" onclick="Ver();" id="cadeado"></span>
            <span class="fa fa-unlock-alt"></span>
            <input type="password" name="senha" placeholder="Senha" required="required" id="senha">
        </div>

        <br>

        <div class="botoes">
            <a href="#">Esqueci minha Senha</a>
            <input type="submit" value="Entrar" name="entrar">

        </div>
        </form>

        <a href="cadastrar.html">Cadastre-se</a>
    </div>
</body>
<script src="js/validar.js"></script>
<script src="js/login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</html>