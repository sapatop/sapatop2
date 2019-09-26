<?php
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
		header("Location: login.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="../css/stylecadastro.css">
		<meta charset="utf-8">
		<title>Cadastrar</title>
	</head>
	<body>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<header>
			<nav class="purple darken-4">
    			<div class="nav-wrapper">
      				<a href="../index.php" class="brand-logo" style="font-family: 'Ranga', cursive; left: 150px; font-size:50px;">Sapatop</a>
      				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      				<ul class="right hide-on-med-and-down">
					        
					<li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="login.php">Login</a></li>
                	<li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="cadastrar.php">Cadastro</a></li>
      				</ul>
    			</div>
  			</nav>

          <!-- Menu mobile -->
 			<ul class="sidenav" id="mobile-demo">
			<li><a href="sobre.html">Sobre</a></li>
			<li><a href="feminino.html">Feminino</a></li>
			<li><a href="masculino.html">Masculino</a></li>
			<li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="#">Login</a></li>
          	<li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="#">Cadastro</a></li>
		</header>
		<form method="POST" action="">
			<h2>Cadastrar-se</h2>
			<label class="nome" style="font-size: 15px; position: absolute; top: 26.5%; left: 10.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: black; font-size: 15px;">Nome</label>
			<input type="text" name="nome" placeholder="Digite o seu nome" required><br><br>
			
			<label class="email" style="font-size: 15px; position: absolute; top: 41%; left: 10.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: black; font-size: 15px;">E-mail</label>
			<input type="text" name="email" placeholder="Digite o seu e-mail" required><br><br>
			
			<label class="usuario" style="font-size: 15px; position: absolute; top: 56%; left: 12%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: black; font-size: 15px;">Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o usuário" required><br><br>
			
			<label class="senha" style="font-size: 15px; position: absolute; top: 72%; left: 10.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: black; font-size: 15px;">Senha</label>
			<input type="password" name="senha" placeholder="Digite a senha" required><br><br>
			
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="login.php" style=" position: absolute; top: 100%; left: 17.6%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center;">Acessar</a></li>
      		</ul>
			
			<input type="submit" name="btnCadUsuario" value="Cadastrar" class="right hide-on-med-and-down waves-effect waves-light btn #6a1b9a purple darken-3" style=" position: absolute; top: 100%; left: 77.8%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center;"><br><br>

		</form>
	</body>
</html>