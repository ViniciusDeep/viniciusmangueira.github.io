<?php
	include_once 'conexao.php';

	$nome	= $_POST['nome'];
	$sobrenome	= $_POST['sobrenome'];
	$email	= $_POST['email'];
	$senha	= $_POST['senha'];
	$data	= $_POST['datanasc'];

	$sql1 = $dbcon->query("SELECT * FROM cadastro WHERE email='$email'");

	if (mysqli_num_rows($sql1) > 0) {
		echo "email_erro";
	}else{
		//echo "vai continuar";
		$sql2 = $dbcon->query("INSERT INTO cadastro(nome,sobrenome,email,senha,data) VALUES ('$nome','$sobrenome','$email','$senha','$data')");
		if ($sql2) {
			echo "registro_ok";
		}else
			echo "registro_erro";
	}

?>