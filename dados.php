<?php 
include("conecta.php");
$data = $_POST["data"];
$sexo = $_POST["sexo"];
$hospital = $_POST["hospital"];
$paciente = $_POST["paciente"];  
$idade = $_POST["idade"];  
$doc = $_POST["doc"];  
$telefone = $_POST["telefone"];
$local = $_POST["local"];  

    


$comando = $pdo->prepare("INSERT INTO paciente (`data`, sexo, nome_hospital, nome_paciente, idade, rgcpf, telefone, `local`)VALUES('$data', '$sexo', '$hospital', '$paciente', $idade, '$doc', '$telefone', '$local')" );
    $resultado = $comando->execute();

    $id = $pdo->lastInsertId();
    header("Location: acompanhante.php?id=$id");
?>