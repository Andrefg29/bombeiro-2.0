<?php 

include("conecta.php");

$op1 = $_POST["op1"];
$op2 = $_POST["op2"];
$op3 = $_POST["op3"];
$op4 = $_POST["op4"];
$op5 = $_POST["op5"];
$op6 = $_POST["op6"];

        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM equipeatendimento WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE equipeatendimento SET motorista = '$op1', socorrista1 = '$op2', socorrista2 = '$op3', socorrista3 = '$op4', demandante = '$op5', equipe = '$op6' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO equipeatendimento (id_paciente, motorista, socorrista1, socorrista2, socorrista3,  demandante, equipe) VALUES($id_paciente,'$op1','$op2', '$op3', '$op4', '$op5', '$op6')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>