<?php
	include_once 'conexao.php';

	$email=$_POST['emaillogin'];
	$senha=$_POST['senhalogin'];

	$sql = $dbcon->query("SELECT * FROM cadastro WHERE email='$email' AND senha='$senha'");

	if(mysqli_num_rows($sql) > 0){
		echo "login_ok";
	}else
		echo "login_erro";

?>