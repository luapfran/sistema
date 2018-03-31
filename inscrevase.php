<?php
session_start();

$cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : 0;


?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Twitter clone</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- jquery - link cdn -->
	<script src="js/jquery-3.2.1.min.js"></script>
	
</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/icone_twitter.png" />
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Voltar para Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="container">

		<br /><br />

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Inscreva-se já.</h3>
			<br />
			<?php 
			if ($cadastro==1) {
				echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>Fechar</button>
				<strong>Usuario cadastrado! </strong> 
				</div> ";
			}
			if($cadastro==2){
				echo "<div class='alert alert-danger' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>Fechar</button>
				<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
				<span class='sr-only'>Error:</span>
				Erro no Cadastro!
				</div> ";		
			}


			?>

			

			

			<form method="post" action="registra_usuario.php" id="formCadastrarse">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required="required">
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="nome@mail.com" required="required">
				</div>

				<div class="form-group">
					<label for="campus">Campus:</label>
					<select id="campus" class="form-control" name="campus">
						<option value="0">Selecione o campus</option>
						<option value="1">Campus Juazeiro do Norte</option>
						<option value="2">Campus Iguatu</option>
						<option value="3">Campus Crato</option>
						<option value="4">Campus Cedro</option>

					</select>
				</div>

				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" class="form-control" id="login" name="login" placeholder="Mínimo de 4 caracteres" required="required" minlength="4">
				</div>

				<div class="form-group">
					<label for="senha">Senha:</label>
					<input id="senha" class="form-control" type="password" name="senha" minlength="6" placeholder="Mínimo de 6 caracteres" required="required">
				</div>

				<div class="form-group">
					<label for="senha-confirmacao">Confirmação de senha:</label>
					<input id="senha-confirmacao" class="form-control" type="password" minlength="6" placeholder="Mínimo de 6 caracteres" name="senha-confirmacao" equalTo="#senha">
				</div>

				<div class="form-group">
					<input id="form-texto" type="submit" value="Cadastrar" class="btn btn-success form-control">
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>

		<div class="clearfix"></div>
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>

	</div>


</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>