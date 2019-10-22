<?php
// Sessão
session_start();
// Conexão
require_once '../cadastro/conexao.php';
// Clear
function clear($input) {
	global $conn;
	// sql
	$var = mysqli_escape_string($conn, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$tamanho = clear($_POST['tamanho']);
	$preco = clear($_POST['preco']);
	$estoque = clear($_POST['estoque']);
	$cor = clear($_POST['cor']);
	$material = clear($_POST['material']);
	$material_inter = clear($_POST['material_inter']);
	$salto = clear($_POST['salto']);
	$alt_salto = clear($_POST['alt_salto']);
	$caminho_img = clear($_POST['caminho_img']);

	$sql = "INSERT INTO produtos (nome, tamanho, preco, estoque, cor, material, material_inter, salto, alt_salto, caminho_img) VALUES ('$nome', '$tamanho', '$preco', '$estoque', '$cor', '$material', '$material_inter', '$salto', '$alt_salto', '$caminho_img')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;