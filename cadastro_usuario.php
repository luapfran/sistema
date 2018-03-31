<?php
session_start();
if (!isset($_SESSION['nome'])) {
		# code...
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- jquery - link cdn -->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".exibir-menu">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">Sistema</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse exibir-menu">
						<ul class="nav navbar-nav">
							<li class="active"><a href="eventos.php">Eventos</a></li>
							<li class=""><a href="campus.php">Campus</a></li>
							<li class=""><a href="atracao.php">Atração</a></li>
							<li class=""><a href="tipo_atracao.php">Tipos de Atrações</a></li>
							<li class=""><a href="participantes.php">Participantes</a></li>
							<li class=""><a href="certificados.php">Certificados</a></li>
							<li class=""><a href="admin.php">Usuários</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha Conta <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Perfil</a></li>
									<li><a href="#">configurações</a></li>
									<li><a href="index.php?logout=1">Sair</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>

			<div class="container-fluid">
				<div class="row">
					<main>
						<div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4" id="form-cadastro">
							<form id="form" action="cadastro.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<legend>Dados de cadastro</legend>

									<div class="form-group">
										<label for="nome">Nome:</label>
										<input id="nome" class="form-control" type="text" name="nome"
										placeholder="Seu nome"
										minlength="2"
										required="required">
									</div>

									<div class="form-group">
										<label for="sobrenome">Sobrenome:</label>
										<input id="sobrenome" class="form-control" type="text" name="sobrenome"
										placeholder="Seu sobrenome"
										minlength="2"
										required="required">
									</div>

									<div class="form-group">
										<label for="email">Email:</label>
										<input id="email" class="form-control" type="email" name="email"
										placeholder="nome@mail.com" required="required">
									</div>
									<div class="form-group">
										<label for="telefone">Telefone:</label>
										<input id="telefone" class="form-control" type="text" name="telefone">
									</div>

									<div class="well">
										<div class="form-group">
											<label for="login">Login:</label>
											<input id="login" class="form-control" type="text" name="login"
											placeholder="Minimo 4"
											minlength="4"
											required="required">
										</div>

										<div class="form-group">
											<label for="senha">Senha:</label>
											<input id="senha" class="form-control" type="password" name="senha"
											minlength="6"
											required="required">
										</div>

										<div class="form-group">
											<label for="senha-confirmacao">Confirmação de senha:</label>
											<input id="senha-confirmacao" class="form-control" type="password"
											name="senha-confirmacao"
											equalTo="#senha">
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Cadastrar</button>
								</fieldset>
							</form>
							<!-- jQuery -->
							<script src="//code.jquery.com/jquery.js"></script>
							<!-- Bootstrap JavaScript -->
							<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
							<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
							<script src="Hello World"></script>
						</body>
						</html>