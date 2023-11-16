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
$opcao9 = $_POST["opcao9"];
$opcao10 = $_POST["opcao10"];


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


        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM meiosauxiliares WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE meiosauxiliares SET celesc = '$opcao1', defesacivil = '$opcao2', igppc = '$opcao3', cit = '$opcao4', policiacivil = '$opcao5', policiamilitar = '$opcao6', prf = '$opcao7', pre = '$opcao8', samu = '$opcao9', outros = '$opcao10'  WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO meiosauxiliares (id_paciente, celesc, defesacivil, igppc, cit, policiacivil, policiamilitar, prf, pre, samu, outros) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6','$opcao7','$opcao8' , '$opcao9' , '$opcao10')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>