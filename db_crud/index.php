<!DOCTYPE html>
<?php include("conexao.php");
$grupo = selectAllpessoa();

?>
<html>
<head>
	<title>CRUD</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"  href="estilo.css"/>

	<link rel="stylesheet" type= "text/css" href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>
	<script src=https://code.jquery.com/jquery-3.3.1.js></script>
	<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>

	<script>
		$(document).ready(function() {
			$('#edita-table').DataTable();
		} );
		
	</script>
</head>

<body>
	<h1>Lista de Pessoas</h1>
	<a href = "inserir.php" id ="button-adiciona">Adicionar</a>
	<table id="edita-table" class="edita-border">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Nascimento</th>
				<th>Salario</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($grupo as $pessoa) { ?>

				<tr>
					<td><?=$pessoa["nome"]?></td>
					<td><?=formatoData($pessoa["data_nascimento"])?></td>
					<td><?=$pessoa["salario"]?></td>
					<td>
						<form name="alterar" action="alterar.php" method="POST">
							<input type="hidden" name="id" value=<?=$pessoa["id"]?>/>
							<input class="button-editar" type="submit" value="Editar" name="editar"/>
						</form>
					</td>
					<td>
						<form name="excluir" action="conexao.php" method="POST">
							<input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
							<input type="hidden" name="acao" value="excluir"/>
							<input class="button-editar" type="submit" value="Excluir" name="excluir"/>

						</form>
					</td>
				</tr>


			<?php }
			?>

		</tbody>
	</table>

	<?php
	function formatoData($data){
		$array = explode("-" , $data);

		$novaData = $array[2]."/".$array[1]."/".$array[0];
		return $novaData;
	}
	?>
</body>
</html>
