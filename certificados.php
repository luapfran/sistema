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
	<title>Sistema</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- jquery - link cdn -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			<link rel="apple-touch-icon" sizes="114x114" href="imagens/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
			<link rel="manifest" href="imagens/manifest.json">
			<link rel="mask-icon" href="imagens/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="theme-color" content="#ffffff">
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
							<li class=""><a href="eventos.php">Eventos</a></li>
							<li class=""><a href="campus.php">Campus</a></li>
							<li class=""><a href="atracao.php">Atração</a></li>
							<li class=""><a href="tipo_atracao.php">Tipos de Atrações</a></li>
							<li class=""><a href="participantes.php">Participantes</a></li>
							<li class="active"><a href="certificados.php">Certificados</a></li>
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
				<div class="row-fluid">
					<div class="page-header">
						<h2>Certificados</h2>
					</div>
					
					<div class="well">
						<form class="form-inline" role="Search">
							<label for="localiza">Nome</label>
							<div class="form-group">
								<input type="text" class="form-control" id="localiza" placeholder="Search">
							</div>
							<div class="form-group">
								<a href="#" class="btn btn-default dropdown-menu-right">Buscar</a>
							</div>
							<div class="form-group btn-right">
								<input type="submit" class="btn btn-primary" value="Novo">
							</div>
						</form>
					</div>			

					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Descrição</th>
								<th>Cidade</th>
								<th>Criado em</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Campus Acaraú</td>
								<td>Campus Acaraú</td>
								<td>Acaraú</td>
								<td>21/08/2014 13:48</td>
								<td>
									<div class="btn-group" role="group" aria-label="...">
										<a class=" btn-group-xs" href="#" role="button"><button type="button" class="btn btn-default">Exibir</button></a>
										<a class=" btn-group-xs" href="#" role="button"><button type="button" class="btn btn-default">Editar</button></a>
										<a class=" btn-group-xs" href="#"><button type="button" class="btn btn-danger">Excluir</button></a> 
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!--  fim div row-fluid-1  -->
				<div class="row-fluid">
					<ul class="pager">
						<li><a href="#">Previous</a></li>
						<li><a href="#">Next</a></li>
					</ul>	
					<footer class="text-center fixarRodape">
						<a href="https://www.ifce.edu.br/juazeirodonorte">IFCE - Campus Juazeiro do Norte</a> 
					</footer>		
				</div><!--  fim div row-fluid-2  -->
				
			</div><!--  fim div container fluid  -->
			
			

			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="Hello World"></script>
		</body>
		</html>