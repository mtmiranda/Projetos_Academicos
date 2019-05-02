<?php

?>
	<title>CRUD</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"  href="estilo.css"/>

<form name="cadastroPessoa" action="conexao.php" method="POST">
	<table id="edita-table">
		<tbody>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" value=""/></td>
			</tr>

			<tr>
				<td>Data_Nascimento:</td>
				<td><input type="date" name="nascimento" value=""/></td>
			</tr>

			<tr>
				<td>Salario:</td>
				<td><input type="number" min="0.00" max="any" name="salario" value=""/></td>
				</tr>

			<tr>
				<td><input type="hidden" name="acao" value="inserir"/></td>
				<td><input type="submit" value="Enviar" name="Enviar"/></td>
			</tr>
		</tbody>
	</table>
