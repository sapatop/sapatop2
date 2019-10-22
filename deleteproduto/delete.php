<?php
// Sessão
session_start();
// Conexão
require_once '../cadastro/conexao.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "DELETE FROM produtos WHERE id = '$id'";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;