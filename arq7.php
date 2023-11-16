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
$opcao38 = "Não";
$opcao39 = $_POST["opcao39"];
$opcao40 = $_POST["opcao40"];
$opcao41 = $_POST["opcao41"];
$opcao42 = $_POST["opcao42"];
$opcao43 = $_POST["opcao43"];
$opcao44 = $_POST["opcao44"];



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
                    $opcao29 = "Sim";}

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
                    
                              
           if(isset($_POST["opcao38"])){
                $opcao38 = "Sim";}
                                
                              
           if(isset($_POST["opcao39"])){
                $opcao39 = "Sim";}
            
                    
                              
           if(isset($_POST["opcao40"])){
                $opcao40 = "Sim";}
            
                    
                              
           if(isset($_POST["opcao41"])){
                $opcao41 = "Sim";}
            
                    
                              
           if(isset($_POST["opcao42"])){
                $opcao42 = "Sim";}
            
                    
                              
           if(isset($_POST["opcao43"])){
                $opcao43 = "Sim";}
            
                    
                              
           if(isset($_POST["opcao44"])){
                $opcao44 = "Sim";}
            
    
                    
                    
       
        
        
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM sinaisesintomas WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE procedimentos SET aspiracao = '$opcao1', avaliacao_inicial = '$opcao2', avaliacao_dirigida = '$opcao3', avaliacao_continuada = '$opcao4', chave_rautek = '$opcao5', canula_guedel = '$opcao6', desobstrucao_va = '$opcao7', emprego_dea = '$opcao8'  WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO procedimentos (id_paciente, aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, maca_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento90, gerenciamento_disco, limpeza_ferimento, curativos, compressivo, encravamento, ocular, queimadura, simples, rolamento180, tomada_decisao, tratado_choque, uso_canula, 3pontas, ventilacao_suporte, imobilizacao, membro_inf_dir, membro_inf_esq, membro_sup_dir, membro_sup_esq, quadril, cervical, uso_ked, uso_ttf, uso_colar, Oxigenioterapia, Reanimador) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6','$opcao7','$opcao8')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>