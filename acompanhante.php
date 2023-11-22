<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados Pessoais do Acompanhante - Bombeiros Voluntários</title>
  <link rel="icon" type="image/png" href="image/logo_noar.png">
  <link rel="stylesheet" href="css/login.css">
  <script src="https://kit.fontawesome.com/f87260a7c7.js" crossorigin="anonymous"></script>
  <script src="jquery-1.8.2.min.js"></script>
  <style>
    body{
      background-image: url('image/fundo.jpg');
    }

    .caixacadastro{
        height: 350px;
    }

    .nao{
      display: flex;
    }
    .nao h4{
      margin: 0;
      text-decoration: underline;
      cursor: pointer;
      font-weight: 400
    }

  </style>
</head>

<body>
    <div class="caixacadastro">
      <br>
        <h2>Insira os Dados do Acompanhante</h2>

<form method="post" action="acomp.php" id="acompanhant">

    <input type="hidden" name='id' value="<?php 
      echo($id);
    ?>">
    <div class="input">
    <div class="acompanhante">
        <span class="fa-solid fa-user"></span>
        <input type="text" id="acompanhante2" placeholder="Nome do Acompanhante" name="nome_acomp">
      </div>
      <br>
      <div class="idade2" id="div_idade">
        <span class="fa-solid fa-arrow-up-9-1"></span>
        <input type="number" id="idade3" placeholder="Idade do Acompanhante" name="idade_acomp">
      </div>
      <br>
      </div>
      <div class="nao" onclick="naotem();">
      <h4 >não tem acompanhante</h4>
      </div>
    
    <br>
      <div class="botoes">
        <input type="submit" value="Enviar" class="btn">
        <input type="reset" value="Limpar" class="btn">
      </div>
    
</form>

  <script>
 

    function naotem(){
      document.querySelector('input[name="nome_acomp"]').value = "--"; 
      document.querySelector('input[name="idade_acomp"]').value = 0; 		
	}

  </script>

</body>
</html>