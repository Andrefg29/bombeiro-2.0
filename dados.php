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
    $_SESSION['data'] = $data;
    $_SESSION['sexo'] = $sexo;
    $_SESSION['hospital'] = $hospital;
    $_SESSION['paciente'] = $paciente;
    $_SESSION['idade'] = $idade;
    $_SESSION['doc'] = $doc;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['local'] = $local;
    
    header("Location: acompanhante.php");
?>