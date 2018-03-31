<?php
	require_once('db.class.php');

	$nome = filter_input(INPUT_POST,'nome');

	$email = filter_input(INPUT_POST,'email');

	$login = filter_input(INPUT_POST,'login');
	
	$senha = md5(filter_input(INPUT_POST,'senha'));

	$campus = filter_input(INPUT_POST,'campus');
	
	$objeto = new db();

	$link = $objeto->conecta_mysql();

	$sql_insert ="insert into tb_administradores (nome, email, login, senha, id_campus) values ('$nome', '$email', '$login', '$senha', '$campus')";
	//funcao que cadastra no banco
	$resultado = mysqli_query($link, $sql_insert);
	if ($resultado) {
		header('Location: inscrevase.php?cadastro=1');
	}else{
		header('Location: inscrevase.php?cadastro=2');
	}
?>



