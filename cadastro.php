<?php 
include("conecta.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];  
    


$comando = $pdo->prepare("INSERT INTO voluntario (nome, email, cpf, senha)VALUES('$nome', '$email', '$cpf', '$senha')" );
    $resultado = $comando->execute();

    $id = $db->lastInsertId();


    header("Location: principal.php?id=$id");
?>