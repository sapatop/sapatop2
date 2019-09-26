<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     	<link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
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
		<form method="POST" action="valida.php">
			<h2>Área de login</h2>
			<label class="usuario" style="position: absolute; top: 38%; left: 11.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: black; font-size: 15px;">Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o seu usuário" required><br><br>
			
			<label class="senha" style="position: absolute; top: 62%; left: 10.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: black; font-size: 15px;">Senha</label>
			<input type="password" name="senha" placeholder="Digite a sua senha" required><br><br>
			
			<input type="submit" name="btnLogin" value="Acessar" style=" position: absolute; top: 100%; left: 18%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center;" class="waves-effect waves-light btn #6a1b9a purple darken-3">
			

      			<ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="cadastrar.php" style=" position: absolute; top: 100%; left: 72%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center;">Cadastre-se aqui</a></li>
      			</ul>
		</form>
		<br><br><br>
	</body>
</html>