<meta charset="utf-8">

<?php

include 'conexao.php'; //Conexão com banco de dados.
	
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$email = $_POST['email'];
	$jogos = $_POST['jogo'];
	$experiencia = $_POST['exp'];
	$arquivo = $_POST['arq'];
		
			$insere = "INSERT INTO informacoes (nome, sexo, email, jogos, experiencia, arquivo) VALUES ('$nome','$sexo','$email','$jogos','$experiencia','$arquivo')";

				mysql_query($insere) or die("Erro ao armazenar dados.");
					header('location:inicial.html');

?>
