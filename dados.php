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
    
    session_start();

    $_SESSION['id_paciente'] = $pdo->lastInsertId();
    $_SESSION['data'] = $pdo->lastInsertId()
    $_SESSION['sexo'] = $pdo->lastInsertId()
    $_SESSION['hospital'] = $pdo->lastInsertId()
    $_SESSION['paciente'] = $pdo->lastInsertId()
    $_SESSION['idade'] = $pdo->lastInsertId()
    $_SESSION['doc'] = $pdo->lastInsertId()
    $_SESSION['telefone'] = $pdo->lastInsertId()
    
    header("Location: acompanhante.php");
?>