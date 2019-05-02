<?php

if(isset($_POST["acao"])){
	if ($_POST["acao"]=="inserir"){
		inserirPessoa();
	}
	if($_POST["acao"]=="alterar"){
		alterarPessoa();
	}
	if($_POST["acao"]=="excluir"){
		excluirPessoa();
	}
}

function abrirBanco(){
	$conexao = new mysqli("localhost","root","","db_crud");
	return $conexao;
}

function inserirPessoa(){
	$banco = abrirBanco();

	$sql = "INSERT INTO cadastro(nome, data_nascimento,salario) VALUES ('{$_POST["nome"]}','{$_POST["nascimento"]}','{$_POST["salario"]}')";

	$banco->query($sql);
	$banco->close();
	voltarIndex();
}

function alterarPessoa(){
	$banco = abrirBanco();
	$sql = "UPDATE cadastro SET nome='{$_POST["nome"]}', data_nascimento='{$_POST["nascimento"]}',salario='{$_POST["salario"]}' WHERE id='{$_POST["id"]}'";
	$banco->query($sql);
	$banco->close();
	voltarIndex();
}

function excluirPessoa(){
	$banco = abrirBanco();
	$sql = "DELETE FROM cadastro WHERE id='{$_POST["id"]}'";
	$banco->query($sql);
	$banco->close();
	voltarIndex();
}

function selectAllPessoa(){
	$banco = abrirBanco();
	$sql = "SELECT * FROM cadastro ORDER BY nome";
	$resultado = $banco->query($sql);
	$banco->close();
	while($row = mysqli_fetch_array($resultado)){
		$grupo[] = $row;
	}
	return $grupo;
}

function selectIdPessoa($id){
	$banco = abrirBanco();
	$sql = "SELECT * FROM cadastro WHERE id = '.$id'";
	$resultado = $banco->query($sql);
	$banco->close();
	$pessoa = mysqli_fetch_assoc($resultado);
	return $pessoa;
}

function voltarIndex(){
	header("Location:index.php");
}
?>
