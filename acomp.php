<?php 
include("conecta.php");
$nome_acomp = $_POST["nome_acomp"]; 
$idade_acomp = $_POST["idade_acomp"];  

session_start();
$id_paciente = $_SESSION['id_paciente'];

   
    $comando = $pdo->prepare("INSERT INTO acompanhante (id_paciente, nome_acomp, idade_acomp) VALUES($id_paciente, '$nome_acomp', '$idade_acomp')" );
    $resultado = $comando->execute();

    $_SESSION['nome_acomp'] = $nome_acomp;
$_SESSION['idade_acomp'] = $idade_acomp;

    header("Location: principal.php");
?>