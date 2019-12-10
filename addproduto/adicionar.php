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
				<h3 class="light"> Novo produto </h3>
				<form action="create2.php" method="POST">
					<div class="input-field col s12">
						<input type="text" name="nome" id="nome">
						<label for="nome">Nome: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="tamanho" id="tamanho">
						<label for="tamanho">Tamanho: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="preco" id="preco">
						<label for="preco">Preço: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="estoque" id="estoque">
						<label for="estoque">Estoque: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="cor" id="cor">
						<label for="cor">Cor: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="material" id="material">
						<label for="material">Material: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="material_inter" id="material_inter">
						<label for="material_inter">Material Interno: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="salto" id="salto">
						<label for="salto">Salto: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="alt_salto" id="alt_salto">
						<label for="alt_salto">Altura do Salto: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="caminho_img" id="caminho_img">
						<label for="caminho_img">Nome da Imagem(Com Extenção): </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="id_categoria" id="id_categoria">
						<label for="id_categoria">ID da Categoria: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="novidades" id="novidades">
						<label for="novidades">Novidades: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="destaques" id="destaques">
						<label for="destaques">Destaques: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="queima" id="queima">
						<label for="queima">Queima de Estoque: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="descontos_semana" id="descontos_semana">
						<label for="descontos_semana">Descontos da Semana: </label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="ofertas_dia" id="ofertas_dia">
						<label for="ofertas_dia">Ofertas do Dia: </label>
					</div>
					<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
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