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
$opcao14 = "Não";
$opcao15 = "Não";
$opcao16 = "Não";
$opcao17 = "Não";
$opcao18 = "Não";
$opcao19 = "Não";
$opcao20 = "Não";
$opcao21 = $_POST["opcao21"]; 
 

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
        
    if(isset($_POST["opcao8"])){
             $opcao8 = "Sim";}
        
    if(isset($_POST["opcao9"])){
             $opcao9 = "Sim";}
                       
    if(isset($_POST["opcao10"])){
             $opcao10 = "Sim";}
                            
    if(isset($_POST["opcao11"])){
             $opcao11 = "Sim";}
                               
    if(isset($_POST["opcao12"])){
             $opcao12 = "Sim";}

    if(isset($_POST["opcao13"])){
             $opcao13 = "Sim";}
        
    if(isset($_POST["opcao14"])){
             $opcao14 = "Sim";}
        
    if(isset($_POST["opcao15"])){
             $opcao15 = "Sim";}
                       
    if(isset($_POST["opcao16"])){
             $opcao16 = "Sim";}
                            
    if(isset($_POST["opcao17"])){
             $opcao17 = "Sim";}
                               
    if(isset($_POST["opcao18"])){
             $opcao18 = "Sim";}
        
    if(isset($_POST["opcao19"])){
             $opcao19 = "Sim";}
                
    if(isset($_POST["opcao20"])){
             $opcao20 = "Sim";}
           
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM avaliacaopaciente WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE avaliacaopaciente SET Causado por animais = '$opcao1', Com meio de transporte = '$opcao2', Desmoronamento = '$opcao3', Emergencia medica = '$opcao4', Queda de altura 2m = '$opcao5', Tentativa de suicidio = '$opcao6', Queda propria altura = '$opcao7', Afogamento = '$opcao8', Agressao = '$opcao9', Atropelamento = '$opcao10', Choque eletrico = '$opcao11', Desabamento = '$opcao12', Domestico = '$opcao13', Esportivo = '$opcao14', Intoxicacao = '$opcao15', Queda bicicleta = '$opcao16', Queda moto = '$opcao17', Queda nivel 2m = '$opcao18', Trabalho = '$opcao19', Transferencia = '$opcao20', Outro = '$opcao21'  WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO avaliacaopaciente (id_paciente, Causado por animais, Com meio de transporte, Desmoronamento, Emergencia medica, Queda de altura 2m, Tentativa de suicidio, Queda propria altura, Afogamento, Agressao, Atropelamento, Choque eletrico, Desabamento, Domestico, Esportivo, Intoxicacao, Queda bicicleta, Queda moto, Queda nivel 2m, Trabalho, Transferencia, Outro) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6','$opcao7','$opcao8', '$opcao9', '$opcao10', '$opcao11', '$opcao12','$opcao13','$opcao14', '$opcao15', '$opcao16', '$opcao17', '$opcao18','$opcao19','$opcao20', '$opcao21')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>