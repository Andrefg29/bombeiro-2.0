<?php 
include("conecta.php");
$id = $_POST["id"];
$nome_acomp = $_POST["nome_acomp"]; 
$idade_acomp = $_POST["idade_acomp"];  

   
    $comando = $pdo->prepare("INSERT INTO acompanhante (id_paciente, nome_acomp, idade_acomp) VALUES($id, '$nome_acomp', '$idade_acomp')" );
    $resultado = $comando->execute();
    header("Location: principal.html");
?>