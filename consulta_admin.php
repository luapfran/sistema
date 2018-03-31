<?php 
require_once('db.class.php');


$objeto = new db();

$link = $objeto->conecta_mysql();

$sql_select = "SELECT a.nome, a.email, a.login, c.nome_campus FROM tb_administradores a INNER JOIN tb_campus c ON a.id_campus = c.id_campus";
	//funcao que cadastra no banco
$resultado = mysqli_query($link, $sql_select);
if ($resultado) {
	$dados_usuario = array();
	while ($consulta = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		$dados_usuario[] = $consulta;
	}
	foreach ($dados_usuario as $usuario) {
		//var_dump($usuario);
		//echo "<br/><br/>";
		echo "  <tr>
					<td>".$usuario['nome']."</td>
					<td>".$usuario['email']."</td>
					<td>".$usuario['login']."</td>
					<td>".$usuario['nome_campus']."</td>
					<td>
						<div class='btn-group' role='group' aria-label='...'>
							<a class='btn-group-xs' href='#' role='button'><button type='button' class='btn btn-default'>Exibir</button></a>
							<a class='btn-group-xs' href='#' role='button'><button type='button' class='btn btn-default'>Editar</button></a>
							<a class='btn-group-xs' href='#'><button type='button' class='btn btn-danger'>Excluir</button></a> 
						</div>
					</td>
				</tr>";
	}

}else{
	echo " <div class='alert alert-warning' role='alert'>Usuario nao logado!</div>";
}
?>