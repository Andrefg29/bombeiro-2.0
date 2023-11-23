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
$opcao21 = "Não";
$opcao22 = "Não";
$opcao23 = "Não";
$opcao24 = "Não";
$opcao25 = "Não";
$opcao26 = "Não";
$opcao27 = "Não";
$opcao28 = "Não";
$opcao29 = "Não";
$opcao30 = "Não";
$opcao31 = "Não";
$opcao32 = "Não";
$opcao33 = "Não";
$opcao34 = "Não";
$opcao35 = "Não";
$opcao36 = "Não";
$opcao37 = "Não";
$opcao38 = $_POST["opcao38"];
$opcao39 = $_POST["opcao39"];
$opcao40 = $_POST["opcao40"];


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
                       
       if(isset($_POST["opcao21"])){
                $opcao21 = "Sim";}
                          
       if(isset($_POST["opcao22"])){
                $opcao22 = "Sim";}
   
       if(isset($_POST["opcao23"])){
                $opcao23 = "Sim";}
           
       if(isset($_POST["opcao24"])){
                $opcao24 = "Sim";}
   
       if(isset($_POST["opcao25"])){
                   $opcao25 = "Sim";}
           
       if(isset($_POST["opcao26"])){
                       $opcao26 = "Sim";}
                        
           if(isset($_POST["opcao27"])){
                    $opcao27 = "Sim";}
                      
           if(isset($_POST["opcao28"])){
                    $opcao28 = "Sim";}
                           
           if(isset($_POST["opcao29"])){
                    $opcao13 = "Sim";}
                              
           if(isset($_POST["opcao30"])){
                    $opcao30 = "Sim";}
       
           if(isset($_POST["opcao31"])){
                    $opcao31 = "Sim";}
               
           if(isset($_POST["opcao32"])){
                    $opcao32 = "Sim";}

                    if(isset($_POST["opcao33"])){
                       $opcao33 = "Sim";}
                         
              if(isset($_POST["opcao34"])){
                       $opcao34 = "Sim";}
                              
              if(isset($_POST["opcao35"])){
                       $opcao35 = "Sim";}
                                 
              if(isset($_POST["opcao36"])){
                       $opcao36 = "Sim";}
          
              if(isset($_POST["opcao37"])){
                       $opcao37 = "Sim";}
        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM procedimentos WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE procedimentos SET aspiracao = '$opcao1', avaliacao_inicial = '$opcao2', avaliacao_dirigida = '$opcao3', avaliacao_continuada = '$opcao4', chave_rautek = '$opcao5', canula_guedel = '$opcao6', desobstrucao_va = '$opcao7', emprego_dea = '$opcao8', maca_rodas = '$opcao9', maca_rigida = '$opcao10', ponte = '$opcao11', retirado_capacete = '$opcao12', rcp = '$opcao13', rolamento90 = '$opcao14', gerenciamento_disco = '$opcao15', limpeza_ferimento = '$opcao16', curativos = '$opcao17', compressivo = '$opcao18', encravamento = '$opcao19', ocular = '$opcao20', queimadura = '$opcao21', simples = '$opcao22', rolamento180 = '$opcao23', tomada_decisao = '$opcao24', tratado_choque = '$opcao25', uso_canula = '$opcao26', 3pontas = '$opcao27', ventilacao_suporte = '$opcao28', imobilizacao = '$opcao29', membro_inf_dir = '$opcao30', membro_inf_esq = '$opcao31', membro_sup_dir = '$opcao32', membro_sup_esq = '$opcao33', quadril = '$opcao34', cervical = '$opcao35', uso_ked = '$opcao36', uso_ttf = '$opcao37', uso_colar = '$opcao38', Oxigenioterapia = '$opcao39', Reanimador = '$opcao40' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO procedimentos (id_paciente, aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, maca_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento90, gerenciamento_disco, limpeza_ferimento, curativos, compressivo, encravamento, ocular, queimadura, simples, rolamento180, tomada_decisao, tratado_choque, uso_canula, 3pontas, ventilacao_suporte, imobilizacao, membro_inf_dir, membro_inf_esq, membro_sup_dir, membro_sup_esq, quadril, cervical, uso_ked, uso_ttf, uso_colar, Oxigenioterapia, Reanimador) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6','$opcao7','$opcao8','$opcao9','$opcao10', '$opcao11', '$opcao12', '$opcao13', '$opcao14','$opcao15','$opcao16','$opcao17', '$opcao18','$opcao19','$opcao20','$opcao21','$opcao22', '$opcao23', '$opcao24', '$opcao25', '$opcao26','$opcao27','$opcao28','$opcao29','$opcao30','$opcao31','$opcao32','$opcao33', '$opcao34', '$opcao35', '$opcao36', '$opcao37','$opcao38','$opcao39', '$opcao40')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>