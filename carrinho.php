<?php
	session_start();
	require_once "functions/product.php";
	require_once "functions/cart.php";
	$pdoConnection = require_once "connection.php";
	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
						addCart($_GET['id'], 1);
		}
		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
			deleteCart($_GET['id']);
		}
		if($_GET['acao'] == 'up'){
			if(isset($_POST['prod']) && is_array($_POST['prod'])){
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		}
		header('location: carrinho.php');
	}
	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!-- FontAwesome Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8">
		<title>Sapatop</title>
	</head>
	<body>
		<div class="container">
			
			<div class="card-body">
				<h4 class="card-title" style="color: #513f36">Carrinho</h4>
				<a href="index.php" style="color: #c2927c;" >Lista de Produtos</a>
			</div>
			<?php if($resultsCarts) : ?>
			<form action="carrinho.php?acao=up" method="post">
				<table class="table table-strip">
					<thead>
						<tr>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Preço</th>
							<th>Subtotal</th>
							<th>Ação</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($resultsCarts as $result) : ?>
						<tr>
							
							<td><?php echo $result['name']?></td>
							<td>
								<input type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />
								
							</td>
							<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
							<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
							<td><a style="background-color: #513f36" href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="btn">Remover</a></td>
							
						</tr>
						<?php endforeach;?>
						<tr>
							<td colspan="3" class="text-right"><b>Total: </b></td>
							<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
							<td></td>
						</tr>
					</tbody>
					
				</table>
				<div class="row">
					<div class="col l9" style="padding: 0;">
						<a class="btn" href="index.php" style="background-color: #513f36">Continuar Comprando</a>
						<button class="btn" type="submit" style="background-color: #513f36">Atualizar Carrinho</button>
					</div>


					<?php 
					$id = $_SESSION['id'];
					$_SESSION['id'] = $id;
					if(isset($_SESSION['cpf']) && !empty($_SESSION['cpf']) and ($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
		            <div class="col l3" style="padding: 0;">
						<a href="https://pagseguro.uol.com.br/">
							<img  src="pagseguro5.png">
						</a>
					</div>
		            <?php } else { ?>
		            <div class="col l3" style="padding: 0;">
		            	<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
						<a href="criardados/areacliente.php">
						<?php } else { ?>
							<a href="cadastro/login.php">
								<?php } ?>
							<img  src="pagseguro5.png">
						</a>
					</div>
            		<?php } ?>
				</div>
			</form>
			<?php endif?>
			
		</div>
		
	</body>
</html>