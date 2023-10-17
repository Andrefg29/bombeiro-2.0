<?php
session_start();

$id_paciente = $_SESSION['id_paciente'];
$data = $_SESSION['data'];
$temp = explode("-",$data);
$data = $temp[2] . "/" . $temp[1] . "/" . $temp[0];
$sexo = $_SESSION['sexo'];
if($sexo == 'masculino'){
    $sexo = 'M';}else{ $sexo = 'F';}
$hospital = $_SESSION['hospital'];
$paciente = $_SESSION['paciente'];
$idade = $_SESSION['idade'];
$doc = $_SESSION['doc'];
$telefone = $_SESSION['telefone'];
$local = $_SESSION['local'];
$nome_acomp = $_SESSION['nome_acomp'];
$idade_acomp = $_SESSION['idade_acomp'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombeiros</title>
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" type="image/png" href="image/logobomb.png">
    <script src="https://kit.fontawesome.com/f87260a7c7.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="navbar">
        <div class="port">
            <div class="logo"><img src="image/logobomb.png"><img src="image/medicina.png"></div>
            <div class="titulo">
            <h2>Bombeiros Voluntários</h2>
            <h4>Assoc. de Serviços Sociais Voluntários de Guaramirim</h4>
        </div>
        </div>
        <div class="cennav">
            <div class="linha">DATA:&nbsp;&nbsp;<p><?php echo($data); ?></p></div>
            <div class="linha">NOME:&nbsp;&nbsp;<p><?php echo($paciente); ?></p></div>
            <div class="linha">IDADE:&nbsp;&nbsp;<p><?php echo($idade); ?></p></div>
            <div class="linha">SEXO:&nbsp;&nbsp;<p><?php echo($sexo); ?></p></div>
            <div class="linha">NOME DO HOSPITAL:&nbsp;&nbsp;<p><?php echo($hospital); ?></p></div>
        </div>
        <div class="dirnav">
            <div class="linha">RG/CPF PACIENTE:&nbsp;&nbsp;<p><?php echo($doc); ?></p></div>
            <div class="linha">TELEFONE:&nbsp;&nbsp;<p><?php echo($telefone); ?></p></div>
            <div class="linha">ACOMPANHANTE:&nbsp;&nbsp;<p><?php echo($nome_acomp); ?></p></div>
            <div class="linha">IDADE:&nbsp;&nbsp;<p>18</p><?php echo($idade_acomp); ?></p></div>
            <div class="linha">LOCAL DA OCORRÊNCIA:&nbsp;&nbsp;<p><?php echo($local); ?></p></div>
        </div>
        <div class="dado" onclick="dados();"><i class="fa-solid fa-caret-down"></i></div>
    </div>
    <div class="telapreta" id="dado" onclick="fdado();">
    <div class="dadosos">
        
        <div class="cennav2">
        <div class="linha">DATA:&nbsp;&nbsp;<p><?php echo($data); ?></p></div>
            <div class="linha">NOME:&nbsp;&nbsp;<p><?php echo($paciente); ?></p></div>
            <div class="linha">IDADE:&nbsp;&nbsp;<p><?php echo($idade); ?></p></div>
            <div class="linha">SEXO:&nbsp;&nbsp;<p><?php echo($sexo); ?></p></div>
            <div class="linha">NOME DO HOSPITAL:&nbsp;&nbsp;<p><?php echo($hospital); ?></p></div>
        </div>
        <div class="dirnav2">
        <div class="linha">RG/CPF PACIENTE:&nbsp;&nbsp;<p><?php echo($doc); ?></p></div>
            <div class="linha">TELEFONE:&nbsp;&nbsp;<p><?php echo($telefone); ?></p></div>
            <div class="linha">ACOMPANHANTE:&nbsp;&nbsp;<p><?php echo($nome_acomp); ?></p></div>
            <div class="linha">IDADE:&nbsp;&nbsp;<p>18</p><?php echo($idade_acomp); ?></p></div>
            <div class="linha">LOCAL DA OCORRÊNCIA:&nbsp;&nbsp;<p><?php echo($local); ?></p></div>
        </div>
    </div>
</div>
    <div class="formes">
    <div class="abas">
        <h3 class="ti">Tópicos:</h3>
        <div class="abacima active" onclick="abrir();" id="aba1"><h3>Tipo de Ocorrência:</h3><i class="fa-solid fa-chevron-right" id="seta"></i></div>
        <div class="abacima" onclick="abrir2();" id="aba2"><h3>Sobre a Vítima:</h3><i class="fa-solid fa-chevron-right" id="seta2"></i></div>
        <div class="abacima" onclick="abrir3();" id="aba3"><h3>Problemas:</h3><i class="fa-solid fa-chevron-right" id="seta3"></i></div>
        <div class="abacima" onclick="abrir4();" id="aba4"><h3>Procedimentos:</h3><i class="fa-solid fa-chevron-right" id="seta4"></i></div>
        <div class="abacima" onclick="abrir5();" id="aba5"><h3>Condução:</h3><i class="fa-solid fa-chevron-right" id="seta5"></i></div>
        <div class="abacima" onclick="abrir6();" id="aba6"><h3>Sinais e Sintomas:</h3><i class="fa-solid fa-chevron-right" id="seta6"></i></div>
        <div class="abacima" onclick="abrir7();" id="aba7"><h3>Anamnese Gestacional:</h3><i class="fa-solid fa-chevron-right" id="seta7"></i></div>
        <div class="abacima" onclick="abrir8();" id="aba8"><h3>Decisão de Tranporte:</h3><i class="fa-solid fa-chevron-right" id="seta8"></i></div>
        <div class="abacima" onclick="abrir9();" id="aba9"><h3>Equipe de Atendimento:</h3><i class="fa-solid fa-chevron-right" id="seta9"></i></div>
        <div class="abacima" onclick="abrir10();" id="aba10"><h3>Sinais Vitais:</h3><i class="fa-solid fa-chevron-right" id="seta9"></i></div>
    </div>
    
    <div class="iframes">
        <iframe src="avaliacaopaciente.html" id="iframe1" width="100%" height="100%"></iframe>
        <iframe src="problemas.html" id="iframe3" width="100%" height="100%"></iframe>
        <iframe src="vitimaera.html" id="iframe2" width="100%" height="100%"></iframe>
        <iframe src="procedimentos.html" id="iframe4" width="100%" height="100%"></iframe>
        <iframe src="conducao.html" id="iframe5" width="100%" height="100%"></iframe>
        <iframe src="sinaisesintomas.html" id="iframe6" width="100%" height="100%"></iframe>
        <iframe src="anamnesegest.html" id="iframe7" width="100%" height="100%"></iframe>
        <iframe src="decisaodetransporte.html" id="iframe8" width="100%" height="100%"></iframe>
        <iframe src="equipe.html" id="iframe9" width="100%" height="100%"></iframe>
        <iframe src="sinaisvitais.html" id="iframe10" width="100%" height="100%"></iframe>
    </div>
</div>

    <a href="termo.pdf" target="_blank" class="termo"><i class="fa-regular fa-file-lines"></i></a>
<iframe src="https://drive.google.com/file/d/1Xnor8IzKSUNpOuuwOh7gT4b-57YW4g9A/preview" width="640" height="480" allow="autoplay"></iframe>
</body>

<script>
    var iframe1 = document.getElementById('iframe1');
    var aba1 = document.getElementById('aba1');
    var iframe2 = document.getElementById('iframe2');
    var aba2 = document.getElementById('aba2');
    var iframe3 = document.getElementById('iframe3');
    var aba3= document.getElementById('aba3');
    var iframe4 = document.getElementById('iframe4');
    var aba4 = document.getElementById('aba4');
    var iframe5 = document.getElementById('iframe5');
    var aba5 = document.getElementById('aba5');
    var iframe6 = document.getElementById('iframe6');
    var aba6 = document.getElementById('aba6');
    var iframe7 = document.getElementById('iframe7');
    var aba7 = document.getElementById('aba7');
    var iframe8 = document.getElementById('iframe8');
    var aba8 = document.getElementById('aba8');
    var iframe9 = document.getElementById('iframe9');
    var aba9 = document.getElementById('aba9');
    var iframe10 = document.getElementById('iframe10');
    var aba10 = document.getElementById('aba10');


    function dados(){
        document.getElementById('dado').style.display = 'block'
    }

    function fdado(){
        document.getElementById('dado').style.display = 'none'
    }

    function abrir(){
       aba1.classList.add('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba5.classList.remove('active');
       aba4.classList.remove('active');
       aba6.classList.remove('active');
       aba7.classList.remove('active');
       iframe1.style.display = 'block';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       iframe5.style.display = 'none';
       iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir2(){
       aba2.classList.add('active');
       aba1.classList.remove('active');
       aba3.classList.remove('active');
       aba5.classList.remove('active');
       aba4.classList.remove('active');
       iframe2.style.display = 'block';
       iframe1.style.display = 'none';
       iframe3.style.display = 'none';
       iframe5.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
        iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir3(){
       aba3.classList.add('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba5.classList.remove('active');
       aba4.classList.remove('active');
       iframe3.style.display = 'block';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe5.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir4(){
       aba4.classList.add('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba5.classList.remove('active');
       iframe4.style.display = 'block';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe5.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir5(){
       aba5.classList.add('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba4.classList.remove('active');
       iframe5.style.display = 'block';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
       iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir6(){
       aba5.classList.remove('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba4.classList.remove('active');
       iframe5.style.display = 'none';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.add('active');
       aba7.classList.remove('active');
       iframe6.style.display = 'block';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir7(){
       aba5.classList.remove('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba4.classList.remove('active');
       iframe5.style.display = 'none';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.add('active');
       iframe6.style.display = 'none';
       iframe7.style.display = 'block';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir8(){
       aba5.classList.remove('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba4.classList.remove('active');
       iframe5.style.display = 'none';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
       iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.add('active');
       iframe8.style.display = 'block';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir9(){
       aba5.classList.remove('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba4.classList.remove('active');
       iframe5.style.display = 'none';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
       iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.add('active');
       iframe9.style.display = 'block';
       aba10.classList.remove('active');
       iframe10.style.display = 'none';
    }

    function abrir10(){
       aba5.classList.remove('active');
       aba1.classList.remove('active');
       aba2.classList.remove('active');
       aba3.classList.remove('active');
       aba4.classList.remove('active');
       iframe5.style.display = 'none';
       iframe1.style.display = 'none';
       iframe2.style.display = 'none';
       iframe3.style.display = 'none';
       iframe4.style.display = 'none';
       aba6.classList.remove('active');
       aba7.classList.remove('active');
       iframe6.style.display = 'none';
       iframe7.style.display = 'none';
       aba8.classList.remove('active');
       iframe8.style.display = 'none';
       aba9.classList.remove('active');
       iframe9.style.display = 'none';
       aba10.classList.add('active');
       iframe10.style.display = 'block';
    }

</script>
</html>