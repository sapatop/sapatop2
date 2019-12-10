<?php
// Conexão
include_once '../cadastro/conexao.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conn, $_GET['id']);
	$sql = "SELECT * FROM produtos WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Sistema de cadastro de produtos</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<div class="row">
			<div class="col s12 m6 push-m3">
				<h3 class="light"> Editar produto </h3>
				<form action="update.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
					<div class="input-field col s12">
						<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
						<label for="nome">Nome: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="tamanho" value="<?php echo $dados['tamanho'];?>" id="tamanho">
						<label for="tamanho">Tamanho: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['preco'];?>" name="preco" id="preco">
						<label for="preco">Preço: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['estoque'];?>" name="estoque" id="estoque">
						<label for="estoque">Estoque: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['cor'];?>" name="cor" id="cor">
						<label for="cor">Cor: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['material'];?>" name="material" id="material">
						<label for="material">Material: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['material_inter'];?>" name="material_inter" id="material_inter">
						<label for="material_inter">Material Interno: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['salto'];?>" name="salto" id="salto">
						<label for="salto">Salto: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['alt_salto'];?>" name="alt_salto" id="alt_salto">
						<label for="alt_salto">Altura do Salto: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['caminho_img'];?>" name="caminho_img" id="caminho_img">
						<label for="caminho_img">Nome da Imagem: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['id_categoria'];?>" name="id_categoria" id="id_categoria">
						<label for="id_categoria">ID da Categoria: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['novidades'];?>" name="novidades" id="novidades">
						<label for="novidades">Novidades: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['destaques'];?>" name="destaques" id="destaques">
						<label for="destaques">Destaques: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['queima'];?>" name="queima" id="queima">
						<label for="queima">Queima de Estoque: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['descontos_semana'];?>" name="descontos_semana" id="descontos_semana">
						<label for="descontos_semana">Descontos Semanais: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" value="<?php echo $dados['ofertas_dia'];?>" name="ofertas_dia" id="ofertas_dia">
						<label for="ofertas_dia">Ofertas do Dia: </label>
					</div>
					<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
					<a href="../index.php" class="btn green"> Página inicial </a>
				</form>
				
			</div>
		</div>
		<!--JavaScript at end of body for optimized loading-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
		<script>
			M.AutoInit();
		</script>
		
	</body>
</html>