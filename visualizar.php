<?php
$id_paciente = $_GET["codigo"];
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM paciente WHERE id_paciente = $id_paciente");
$resultado = $comando->execute();
while ($linhas = $comando->fetch()){
    $paciente = $linhas["nome_paciente"];
    $local = $linhas["local"];
    $idade = $linhas["idade"];
    $hospital = $linhas["nome_hospital"];
    $data = $linhas["data"];
    $temp = explode("-",$data);
    $data = $temp[2] . "/" . $temp[1] . "/" . $temp[0];};


session_start();

$_SESSION['id_paciente'] = $id_paciente;
$_SESSION['nome'] = $paciente;
$_SESSION['local'] = $local;
$_SESSION['hospital'] = $hospital;
$_SESSION['data'] = $data;
$_SESSION['idade'] = $idade;

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
    <style>
              .abrir{

        height: 120vh;
        width: 100%;
        margin-top: -35%;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.623);
        display: none;
        justify-content: center;
        justify-items: center;
        align-items: center;
        align-content: center;
        flex-direction: column;
        color: #fff;
      }

      .opcoes{
        display: flex;
        justify-content: space-around;
        width: 30%
      }

      a{
        text-decoration: none;
        color: #fff;
      }
    </style>
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
            <div class="linha">IDADE:&nbsp;&nbsp;<p><?php echo($idade_acomp); ?></p></div>
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
            <div class="linha">IDADE:&nbsp;&nbsp;<p><?php echo($idade_acomp); ?></p></div>
            <div class="linha">LOCAL DA OCORRÊNCIA:&nbsp;&nbsp;<p><?php echo($local); ?></p></div>
        </div>
    </div>
</div>
    <div class="formes">
    <div class="abas">
        <h3 class="ti">Tópicos:</h3>
        <div class="abacima active" onclick="abrir(1);" id="aba1"><h3>Tipo de Ocorrência:</h3><i class="fa-solid fa-chevron-right" id="seta"></i></div>
        <div class="abacima" onclick="abrir(2);" id="aba2"><h3>Sobre a Vítima:</h3><i class="fa-solid fa-chevron-right" id="seta2"></i></div>
        <div class="abacima" onclick="abrir(3);" id="aba3"><h3>Problemas Encontrados:</h3><i class="fa-solid fa-chevron-right" id="seta3"></i></div>
        <div class="abacima" onclick="abrir(4);" id="aba4"><h3>Nível de Consciência:</h3><i class="fa-solid fa-chevron-right" id="seta4"></i></div>
        <div class="abacima" onclick="abrir(5);" id="aba5"><h3>Condução:</h3><i class="fa-solid fa-chevron-right" id="seta5"></i></div>
        <div class="abacima" onclick="abrir(6);" id="aba6"><h3>Sinais e Sintomas:</h3><i class="fa-solid fa-chevron-right" id="seta6"></i></div>
        <div class="abacima" onclick="abrir(7);" id="aba7"><h3>Localização dos Traumas:</h3><i class="fa-solid fa-chevron-right" id="seta7"></i></div>
        <div class="abacima" onclick="abrir(8);" id="aba8"><h3>Decisão de Tranporte:</h3><i class="fa-solid fa-chevron-right" id="seta8"></i></div>
        <div class="abacima" onclick="abrir(9);" id="aba9"><h3>Equipe de Atendimento:</h3><i class="fa-solid fa-chevron-right" id="seta9"></i></div>
        <div class="abacima" onclick="abrir(10);" id="aba10"><h3>Sinais Vitais:</h3><i class="fa-solid fa-chevron-right" id="seta10"></i></div>
        <div class="abacima" onclick="abrir(11);" id="aba11"><h3>Objetos Recolhidos:</h3><i class="fa-solid fa-chevron-right" id="seta11"></i></div>
        <div class="abacima" onclick="abrir(12);" id="aba12"><h3>Procedimentos Efetuados:</h3><i class="fa-solid fa-chevron-right" id="seta12"></i></div>
        <div class="abacima" onclick="abrir(13);" id="aba13"><h3>Anamnese de Emergência Médica:</h3><i class="fa-solid fa-chevron-right" id="seta13"></i></div>
        <div class="abacima" onclick="abrir(14);" id="aba14"><h3>Meios Auxiliares:</h3><i class="fa-solid fa-chevron-right" id="seta14"></i></div>
        <div class="abacima" onclick="abrir(15);" id="aba15"><h3>Materiais Utilizados:</h3><i class="fa-solid fa-chevron-right" id="seta15"></i></div>
        <div class="abacima" onclick="abrir(16);" id="aba16"><h3>Avaliação da Cinemática:</h3><i class="fa-solid fa-chevron-right" id="seta16"></i></div>
        <div class="abacima" onclick="abrir(17);" id="aba17"><h3>Responsável Pelo Preenchimento:</h3><i class="fa-solid fa-chevron-right" id="seta17"></i></div>
    </div>
    
    <div class="iframes">
        <iframe src="avaliacaopaciente.html" id="iframe1" width="100%" height="100%"></iframe>
        <iframe src="problemas.html" id="iframe3" width="100%" height="100%"></iframe>
        <iframe src="vitimaera.html" id="iframe2" width="100%" height="100%"></iframe>
        <iframe src="glascow.html" id="iframe4" width="100%" height="100%"></iframe>
        <iframe src="conducao.html" id="iframe5" width="100%" height="100%"></iframe>
        <iframe src="sinaisesintomas.html" id="iframe6" width="100%" height="100%"></iframe>
        <iframe src="corpo.html" id="iframe7" width="100%" height="100%"></iframe>
        <iframe src="decisaodetransporte.html" id="iframe8" width="100%" height="100%"></iframe>
        <iframe src="equipe.html" id="iframe9" width="100%" height="100%"></iframe>
        <iframe src="sinaisvitais.html" id="iframe10" width="100%" height="100%"></iframe>
        <iframe src="objetos.html" id="iframe11" width="100%" height="100%"></iframe>
        <iframe src="procedimentos.html" id="iframe12" width="100%" height="100%"></iframe>
        <iframe src="emergenciamed.html" id="iframe13" width="100%" height="100%"></iframe>
        <iframe src="policia.html" id="iframe14" width="100%" height="100%"></iframe>
        <iframe src="materiais.html" id="iframe15" width="100%" height="100%"></iframe>
        <iframe src="cinematica.html" id="iframe16" width="100%" height="100%"></iframe>
        <iframe src="responsavelpelopren.html" id="iframe17" width="100%" height="100%"></iframe>
    </div>
</div>

<div class="abrir" id="abre">
      <h1>Deseja Finalizar a Ocorrência?</h1>
      <div class="opcoes">
        <a href="opcao.html">Sim</a>
        <span onclick="edita();" style="cursor: pointer;">Alterar Dados</span>
        </div>
  </div>

    <a href="termo.pdf" target="_blank" class="termo"><i class="fa-regular fa-file-lines"></i></a>
<iframe src="https://drive.google.com/file/d/1Xnor8IzKSUNpOuuwOh7gT4b-57YW4g9A/preview" width="640" height="480" allow="autoplay"></iframe>
</body>

<script>

function edita(){
  document.getElementById('abre').style.display = 'none'
}

function abriri(){
  document.getElementById('abre').style.display = 'flex'
}

    function dados(){
        document.getElementById('dado').style.display = 'block'
    }

    function fdado(){
        document.getElementById('dado').style.display = 'none'
    }

    function abrir(n){
        for(c = 1; c<=17;c++){
            q = 'aba'+c;
            i = 'iframe'+c;
            document.getElementById(q).classList.remove('active');
            document.getElementById(i).style.display = 'none';
        }
        document.getElementById('aba'+n).classList.add('active');
        document.getElementById('iframe'+n).style.display = 'flex';
    }

</script>
</html>