<?php 

include("conecta.php");

$opcao1 = $_POST["opcao1"];
$opcao2 = $_POST["opcao2"];
$opcao3 = $_POST["opcao3"];
$opcao4 = $_POST["opcao4"];
$opcao5 = $_POST["opcao5"];


        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM objetosrecolhidos WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE objetosrecolhidos SET objeto = '$opcao1', objeto2 = '$opcao2', objeto3 = '$opcao3', objeto4 = '$opcao4', objeto5 = '$opcao5' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO objetosrecolhidos (id_paciente, objeto, objeto2, objeto3, objeto4, objeto5) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>