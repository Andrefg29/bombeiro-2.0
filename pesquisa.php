<?php

include('conecta.php');
    if(isset($_POST['entrar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

include('conecta.php');
    $comando = $pdo->prepare("SELECT * from voluntario WHERE email='$email' and senha='$senha' and cpf='$cpf'" );
    $resultado = $comando->execute();
    $n = 0;
    while ($linhas = $comando->fetch())
    {
        $n = $n-1;
    }
    if($n == 0){
        header("Location: login.php?login=0");
    }
    }
    if(isset($_POST["cadastro"])){
        header("Location: principal.php");}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisa</title>
    <link href="css/entregas.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            align-content: center;
            flex-direction: column;
            background-image: url('./image/tenta2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);

        }

        .pesquisas {
            width: 80%;
        }

        fieldset input {
            width: 18%
        }

        .pesquisa input {
            width: 40%
        }

        .usuario {
            width: 100%;
            background-color: #ffffff9d;
            color: black;

        }

        .usuariot {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        thead {
            background: linear-gradient(0deg, rgba(78, 4, 4, 1) 0%, rgba(218, 21, 21, 1) 100%);
            color: #fff
        }

        td img {
            margin-top: 5px;
            cursor: pointer
        }

        .botaoen {
            width: 10%;
            height: 32px;
            background-color: #c52020;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            border: none;
            border-radius: 5px;
            transition: .4s;
            margin-left: 50px;

        }

        .pesq
        {
            width: 300px;
            height: 30px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            margin-left: 10px;
            
        }
    </style>

</head>

<body>

    <div class="pesquisas">
        <h2>Histórico de ocorrência - Bombeiros voluntários</h2>
        <form action="loginadm.php" method="get">

            <fieldset class="pesquisa">
                <legend> Pesquisar paciente </legend>
                Pesquisar por:
                <select name="pesq" id="pesq" class="pesq">
                    <option value="-----">-----</option>
                    <option value="N° da ocorrência">N° da ocorrência</option>
                    <option value="Nome">Nome</option>
                    <option value="Local">Local</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Veículo envolvido">Veículo envolvido</option>
                    <option value="Data">Data</option>
                </select>
                <input type="submit" class="botaoen" value="Pesquisar" style="width: 10%;" >

            </fieldset>
        </form>

        <br>






        <div class="usuario">
            <table border="1" class="usuariot">
                <thead>
                    <th>N° da ocorrência</th>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Hospital</th>
                    <th>Veículo envolvido</th>
                    <th>Data</th>
                    <th>--</th>
                </thead>

                <tr>
                    <td>N° da ocorrência</td>
                    <td>Nome</td>
                    <td>Local</td>
                    <td>Hospital</td>
                    <td>Veículo envolvido</td>
                    <td>Data</td>
                    <td>
                        <img src='./image/lupa.png' width='25px'>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <script>
        function Editar(txtnome, txtemail, txtsenha, txtcep) {
            nome.value = txtnome;
            email.value = txtemail;
            senha.value = txtsenha;
            cep.value = txtcep;
        }

    </script>
</body>

</html>