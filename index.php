<?php
session_start();
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
$logout = isset($_GET['logout']) ? $_GET['logout'] : 0;
if ($logout) {
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
	<script>
		$(document).ready( function(){
				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#entrar').click(function(){
					
					var campo_vazio = false;

					if($('#login').val() == '' && $('#senha').val() == '' ){
						$('#login').css({'border-color': '#A94442'});
						$('#senha').css({'border-color': '#A94442'});
						$('#login').focus();
						campo_vazio = true;
					} else{
						$('#login').css({'border-color': '#CCC'});
					}
					if(!$('#login').val() == '' && $('#senha').val() == '' ){
						$('#senha').css({'border-color': '#A94442'});
						$('#senha').focus();
						campo_vazio = true;
					}else{
						$('#senha').css({'border-color': '#CCC'});
					}
					
					if(campo_vazio) return false;
				});
			});			
		</script>
		<link rel="apple-touch-icon" sizes="114x114" href="imagens/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
		<link rel="manifest" href="imagens/manifest.json">
		<link rel="mask-icon" href="imagens/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="form-container">
			<div class="panel" id="form-box">
				<form action="validar_acesso.php" method="post">
					<h1 class="text-center">Login</h1>
					<div class="form-group">
						<label class="sr-only" for="login">Usuario</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input type="text" class="form-control" id="login" name="login" placeholder="Digite seu login">
						</div>
					</div>
					<div class="form-group">
						<label class="sr-only" for="senha">Senha</label>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
						</div>
					</div>
					<div class="form-group">
						<!--<input type="submit" value="Entrar" id="entrar" class="btn btn-success form-control">-->
						<button type="buttom" class="btn btn-success form-control" id="entrar">Entrar</button>
					</div>
					<div class="form-group">
						Não é registrado? <a href="inscrevase.php">Crie uma conta</a>
					</div>		
				</form>

			</div>	
		</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="Hello World"></script>
	</body>
	</html>