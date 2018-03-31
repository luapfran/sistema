<?php 
session_start();
require_once('db.class.php');

$login = filter_input(0,'login');

$senha = md5(filter_input(0,'senha'));

$objeto = new db();

$link = $objeto->conecta_mysql();

$sql_select = "select * from tb_administradores where login = '$login' and senha = '$senha';";
	//funcao que cadastra no banco
$resultado = mysqli_query($link, $sql_select);
if ($resultado) {
	$dados_usuario = mysqli_fetch_array($resultado);
		//echo " <div class='alert alert-success' role='alert'>login efetuado com sucesso!</div>";
		//var_dump($dados_usuario);
	if (isset($dados_usuario['login'])) {
		$_SESSION['nome']=$dados_usuario['nome'];
		$_SESSION['email']= $dados_usuario['email'];
		header('Location: eventos.php');
		
	}else{
		//echo " <div class='alert alert-success' role='alert'>login não efetuado com sucesso!</div>";
		header('Location: index.php?erro=1');
	}
	
}else{
	echo " <div class='alert alert-warning' role='alert'>Usuario nao logado!</div>";
}
?>
