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
  
        session_start();
        $id_paciente = $_SESSION['id_paciente'];


$dados = [];  // Variável usada para guardar os dados acima no formato JSON.

$comando = $pdo->prepare("SELECT * FROM sinaisesintomas WHERE id_paciente = $id_paciente");
    $resultado = $comando->execute();

if($comando->rowCount()){
    $comando = $pdo->prepare("UPDATE sinaisesintomas SET abdomen_sensivel_rigido = '$opcao1', afundamento_cranio = '$opcao2', agitacao = '$opcao3', amnesia = '$opcao4', angina_peito = '$opcao5', apneia = '$opcao6', bradicardia = '$opcao7', enfizema_subcutaneo = '$opcao8', bradipneia = '$opcao9', hipertensao = '$opcao10', hipotensao = '$opcao11', nauseasevomitos = '$opcao12', nasoragia = '$opcao13', obito = '$opcao14', otorreia = '$opcao15', otorragia = '$opcao16', taquipneia = '$opcao17', cefaleia = '$opcao18', convulsao = '$opcao19', decorticacao = '$opcao19', deformidade = '$opcao20', estatese_jugular = '$opcao21', desmaio = '$opcao22', desvio_traqueia = '$opcao23', dispneia_2m = '$opcao24', dor_local = '$opcao25', ovace = '$opcao26', priaprismo = '$opcao27', prurido_pele = '$opcao28', sede = '$opcao29', sinal_batile = '$opcao30', sinal_guaxinim = '$opcao31', sudorese = '$opcao32', taquicardia = '$opcao33', face_palida = '$opcao34', bronco_aspirando = '$opcao35', descerebracao = '$opcao36', tontura = '$opcao37', cianose = '$opcao38', Edema = '$opcao39', pupilas = '$opcao40', parada = '$opcao41', hemorragia = '$opcao42', outros = '$opcao43' WHERE id_paciente = $id_paciente");}
    else{
        $comando = $pdo->prepare ("INSERT INTO sinaisesintomas (id_paciente, abdomen_sensivel_rigido, afundamento_cranio, agitacao, amnesia, angina_peito, apneia, bradicardia, enfizema_subcutaneo, bradipneia, hipertensao, hipotensao, nauseasevomitos, nasoragia, obito, otorreia, taquipneia, cefaleia, convulsao, decorticacao, deformidade, estatese_jugular, desmaio, desvio_traqueia, dispneia_2m, dor_local, ovace, priaprismo, prurido_pele, sede, sinal_batile, sinal_guaxinim, sudorese, taquicardia, face_palida, bronco_aspirando, descerebracao, tontura, cianose, Edema, pupilas, parada, hemorragia, outros) VALUES($id_paciente,'$opcao1','$opcao2', '$opcao3', '$opcao4', '$opcao5', '$opcao6','$opcao7','$opcao8','$opcao9','$opcao10', '$opcao11', '$opcao12', '$opcao13', '$opcao14','$opcao15','$opcao16','$opcao17', '$opcao18', '$opcao19', '$opcao20','$opcao21','$opcao22','$opcao23','$opcao24', '$opcao25', '$opcao26', '$opcao27', '$opcao28','$opcao29','$opcao30','$opcao31', '$opcao32', '$opcao33', '$opcao34','$opcao35','$opcao36','$opcao37','$opcao38', '$opcao39', '$opcao40', '$opcao41', '$opcao42','$opcao43')" );
    }

    $resultado = $comando->execute();

array_push($dados);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["dados" => $dados]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>