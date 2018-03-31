<?php 
require_once('db.class.php');


$objeto = new db();

$link = $objeto->conecta_mysql();

$sql_select = "SELECT ca.nome_campus, ca.site, ci.nome_cidade, es.nome_estado FROM tb_campus ca INNER JOIN tb_cidades ci ON ca.id_cidade = ci.id_cidade INNER JOIN tb_estados es ON ci.id_uf=es.id_uf";
	//funcao que cadastra no banco
$resultado = mysqli_query($link, $sql_select);
if ($resultado) {
	$dados_campus = array();
	while ($consulta = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		$dados_campus[] = $consulta;
	}
	foreach ($dados_campus as $campus) {
		//var_dump($usuario);
		//echo "<br/><br/>";
		echo "  <tr>
					<td>".$campus['nome_campus']."</td>
					<td><a href='https://".$campus['site']."'>".$campus['site']."</td>
					<td>".$campus['nome_cidade']."</td>
					<td>".$campus['nome_estado']."</td>
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