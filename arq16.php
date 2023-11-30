<?php 

include("conecta.php");

$op1 = $_POST["op1"];
$op2 = $_POST["op2"];
$op3 = $_POST["op3"];
$op4 = $_POST["op4"];
$op5 = $_POST["op5"];
$op6 = $_POST["op6"];
$op7 = $_POST["op7"];
$op8 = $_POST["op8"];
$op9 = $_POST["op9"];
$op10 = $_POST["op10"];
$op11 = $_POST["op11"];
$op12 = $_POST["op12"];
$op13 = $_POST["op13"];
$op14 = $_POST["op14"];
$op15 = $_POST["op15"];
$op16 = $_POST["op16"];
$op17 = $_POST["op17"];
$op18 = $_POST["op18"];
$op19 = $_POST["op19"];
$op20 = $_POST["op20"];
$op21 = $_POST["op21"];
$op22 = $_POST["op22"];
$op23 = $_POST["op23"];

        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM materiaisutilizados WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE materiaisutilizados SET ataduras = '$op1', cateteroculos = '$op2', compressacomum = '$op3', kits = '$op4', luvasdescart = '$op5', mascaradescart = '$op6', mantaaluminizada = '$op7', pasdea = '$op8', sondaaspiracao = '$op9', sorofisiologico = '$op10', talaspap = '$op11', outrosdesc = '$op12', baseestabiliza = '$op13', colarpequeno = '$op14', colargrande = '$op15', coxinsestabiliza = '$op16', ked = '$op17', macarigida = '$op18', ttf = '$op19', tirantearanha = '$op20', tirantecabeca = '$op21', canula = '$op22', outroshospital = '$op23' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO materiaisutilizados (id_paciente, ataduras, cateteroculos, compressacomum, kits, luvasdescart, mascaradescart, mantaaluminizada, pasdea, sondaaspiracao, sorofisiologico, talaspap, outrosdesc, baseestabiliza, colarpequeno, colargrande, coxinsestabiliza, ked, macarigida, ttf, tirantearanha, tirantecabeca, canula, outroshospital) VALUES($id_paciente,'$op1','$op2', '$op3', '$op4', '$op5', '$op6', '$op7', '$op8', '$op9', '$op10', '$op11', '$op12', '$op13', '$op14', '$op15', '$op16', '$op17', '$op18', '$op19', '$op20', '$op21', '$op22', '$op23')" );
    }

    $resultado = $comando->execute();   

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>