<?php 

include("conecta.php");

$op1 = $_POST["op1"] ."-". $_POST["op12"];
$op2 = $_POST["op2"];
$op3 = $_POST["op3"];
$op4 = $_POST["op4"];
$op5 = $_POST["op5"];
$op6 = $_POST["op6"];
$op7 = $_POST["op7"];
$op8 = "Não";
$op9 = "Não";

if(isset($_POST["op8"])){
    $op8 = "Sim";}

if(isset($_POST["op9"])){
        $op9 = "Sim";}

        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM sinaisvitais WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE sinaisvitais SET pressaoarterial = '$op1', pulso = '$op2', temperatura = '$op3', perfusao = '$op4', saturacao = '$op5', respiracao = '$op6', hgt = '$op7', anormal = '$op8', normal = '$op9' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO sinaisvitais (id_paciente, pressaoarterial, pulso, temperatura, perfusao, saturacao, respiracao, hgt, anormal, normal) VALUES($id_paciente,'$op1','$op2', '$op3', '$op4', '$op5', '$op6', '$op7', '$op8', '$op9')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>