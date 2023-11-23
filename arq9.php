<?php 

include("conecta.php");

$opcao1 = "Não";
$opcao2 = "Não";
$opcao3 = "Não";
$opcao4 = "Não";


if(isset($_POST["opcao1"])){
    $opcao1 = "Sim";}

if(isset($_POST["opcao2"])){
        $opcao2 = "Sim";}

if(isset($_POST["opcao3"])){
         $opcao3 = "Sim";}
           
if(isset($_POST["opcao4"])){
         $opcao4 = "Sim";}
        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM transporte WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE transporte SET critico = '$opcao1', instavel = '$opcao2', estavel = '$opcao3', potencialmente_instavel = '$opcao4' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO transporte (id_paciente, critico, instavel, estavel, potencialmente_instavel) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>