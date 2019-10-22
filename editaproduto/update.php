<?php
// Sessão
session_start();
// Conexão
require_once '../cadastro/conexao.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($conn, $_POST['nome']);
	$tamanho = mysqli_escape_string($conn, $_POST['tamanho']);
	$preco = mysqli_escape_string($conn, $_POST['preco']);
	$estoque = mysqli_escape_string($conn, $_POST['estoque']);
	$cor = mysqli_escape_string($conn, $_POST['cor']);
	$material = mysqli_escape_string($conn, $_POST['material']);
	$material_inter = mysqli_escape_string($conn, $_POST['material_inter']);
	$salto = mysqli_escape_string($conn, $_POST['salto']);
	$alt_salto = mysqli_escape_string($conn, $_POST['alt_salto']);
	$caminho_img = mysqli_escape_string($conn, $_POST['caminho_img']);


	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE produtos SET nome = '$nome', tamanho = '$tamanho', preco = '$preco', estoque = '$estoque', cor = '$cor' , material = '$material' , material_inter = '$material_inter' , salto = '$salto' , alt_salto = '$alt_salto' , caminho_img = '$caminho_img' WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;