<?php include("conexao.php");
$pessoa = selectIdPessoa($_POST["id"]);
?>
<title>CRUD</title>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css" />

<form name="cadastroPessoa" action="conexao.php" method="POST">
	<table id="edita-table">
		<tbody>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" value="<?= $pessoa["nome"] ?>" size="20" /></td>
			</tr>

			<tr>
				<td>Data_Nascimento:</td>
				<td><input type="date" name="nascimento" value="<?= $pessoa["nascimento"] ?>" /></td>
			</tr>

			<tr>
				<td>Salario:</td>
				<td><input type="number" min="0.00" max="any" name="salario" value="<?= $pessoa["salario"] ?>" size="20" /></td>
			</tr>

			<tr>
				<td><input type="hidden" name="acao" value="alterar" />
					<input type="hidden" name="id" value="<?= $pessoa["id"] ?>" />
				</td>

				<td><input type="submit" value="Enviar" name="Enviar" /></td>
			</tr>
		</tbody>
	</table>