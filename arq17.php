<?php 

include("conecta.php");

$op1 = $_POST["op1"];
$op2 = "Não";
$op3 = $_POST["op3"];
$op4 = "Não";
$op5 = $_POST["op5"];
$op6 = "Não";
$op7 = $_POST["op7"];
$op8 = $_POST["op8"];
$op9 = "Não";
$op10 = $_POST["op10"];
$op11 = "Não";
$op12 = $_POST["op12"];

if(isset($_POST["op2"])){
    $op2 = "Sim";}

    if(isset($_POST["op4"])){
        $op4 = "Sim";}

        if(isset($_POST["op9"])){
            $op9 = "Sim";}
        
            if(isset($_POST["op11"])){
                $op11 = "Sim";}

        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM anamnsemedica WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE anamnsemedica SET oqaconteceu = '$op1', aconteceuoutrasvezes = '$op2', aquantotempoaconteceu = '$op3', temalgumproblemadesaude = '$op4', quaisproblemas = '$op5', usademedicacao = '$op6', horariodaultimamedicacao = '$op7', nomedoremedio = '$op8', alergicoalgo = '$op9', alergicoa = '$op10', comeuoubebeuultimas6h = '$op11', qhoras = '$op12'  WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO anamnsemedica (id_paciente, oqaconteceu, aconteceuoutrasvezes, aquantotempoaconteceu, temalgumproblemadesaude, quaisproblemas, usademedicacao, horariodaultimamedicacao, nomedoremedio, alergicoalgo, alergicoa, comeuoubebeuultimas6h, qhoras) VALUES($id_paciente,'$op1','$op2', '$op3', '$op4', '$op5', '$op6', '$op7', '$op8', '$op9', '$op10', '$op11', '$op12')" );
    }

    $resultado = $comando->execute();   

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>