<?php
        // ATENÇÃO: o tipo da coluna na tabela deve ser MEDIUMBLOB
        include("conecta.php");

        session_start();
        $id_paciente = $_SESSION['id_paciente'];

        // Lê o conteúdo do arquivo de imagem e armazena na variável $imagem
		$imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);
		
		$comando = $pdo->prepare("INSERT INTO localizacaotraumas(id_paciente, traumascorpo) VALUES(:id,:foto)");
        $comando->bindParam(":id", $id_paciente);
        $comando->bindParam(":foto", $imagem, PDO::PARAM_LOB);
		$resultado = $comando->execute();


 ?>