<?php 

include("conecta.php");

$opcao1 = "Não";
$opcao2 = "Não";
$opcao3 = "Não";
$opcao4 = "Não";
$opcao5 = "Não";
$opcao6 = "Não";
$opcao7 = "Não";


if(isset($_POST["opcao1"])){
    $opcao1 = "Sim";}

if(isset($_POST["opcao2"])){
        $opcao2 = "Sim";}

        if(isset($_POST["opcao3"])){
            $opcao3 = "Sim";}
        
        if(isset($_POST["opcao4"])){
                $opcao4 = "Sim";}

        if(isset($_POST["opcao5"])){
            $opcao5 = "Sim";}
        
        if(isset($_POST["opcao6"])){
                $opcao6 = "Sim";}

        if(isset($_POST["opcao7"])){
                    $opcao7 = "Sim";}



        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM avaliacaocinematica WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE avaliacaocinematica SET disturbiocomportamento = '$opcao1', encontradoccapacete = '$opcao2', encontradodecinto = '$opcao3', parabrisasavariado = '$opcao4', caminhandonacena = '$opcao5', painelavariado = '$opcao6', volantetorcido = '$opcao7' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO avaliacaocinematica (id_paciente, disturbiocomportamento, encontradoccapacete, encontradodecinto, parabrisasavariado, caminhandonacena, painelavariado, volantetorcido) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6', '$opcao7')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>