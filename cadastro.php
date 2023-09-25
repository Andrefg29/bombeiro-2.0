<?php 

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"]; 
    
include("conecta.php");


$dados = []; 

$comando = $pdo->prepare("INSERT INTO voluntario(nome, email, cpf, senha)VALUES('$nome', '$email', '$cpf', '$senha')" );
    $resultado = $comando->execute();
// O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
// Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário
$resposta = 
      [
            "nome" => $nome,
            "email"  => $email,
            "cpf"  => $cpf,
            "senha"  => $senha,
      ];

array_push($dados, $resposta);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>