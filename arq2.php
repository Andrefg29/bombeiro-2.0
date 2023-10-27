<?php 

include("conecta.php");

$opcao1 = "Não";
$opcao2 = "Não";
$opcao3 = "Não";
$opcao4 = "Não";
$opcao5 = "Não";
$opcao6 = "Não";
$opcao7 = "Não";
$opcao8 = "Não";
$opcao9 = "Não";
$opcao10 = "Não";
$opcao11 = "Não";
$opcao12 = "Não";
$opcao13 = "Não";
 

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
             $opcao = "Sim";}
    
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM avaliacaopaciente WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE avaliacaopaciente SET Causado por animais = '$opcao1', Com meio de transporte = '$opcao2', Desmoronamento = '$opcao3', Emergencia medica = '$opcao4', Queda de altura 2m = '$opcao5', Tentativa de suicidio = '$opcao6', Queda propria altura = '$opcao7', Afogamento = '$opcao8',  WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare("INSERT INTO avaliacaopaciente (id_paciente, Causado por animais, Com meio de transporte, Desmoronamento, Emergencia medica, Queda de altura 2m, Tentativa de suicidio, Queda propria altura, Afogamento, Agressao, Atropelamento, Choque eletrico, Desabamento, Domestico, Esportivo, Intoxicacao, Queda bicicleta, Queda moto, Queda nivel `<`2m, Trabalho, Transferencia, Outro)VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6','$opcao7','$opcao8', '$opcao9', '$opcao10', '$opcao11', '$opcao12','$opcao13','$opcao14', '$opcao15', '$opcao16', '$opcao17', '$opcao18','$opcao19','$opcao20', '$opcao21', '$opcao22', '$opcao23', '$opcao24')" );
    }

    $resultado = $comando->execute();
// O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
// Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário
$resposta = 
      [
            "op1" => $op1,
            "op2"  => $op2,
            "op3"  => $op3,
            "op4"  => $op4,
            "op5"  => $op5,
            "op6"  => $op6
      ];

array_push($dados, $resposta);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>