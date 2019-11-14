<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
		<!-- FontAwesome Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8">
		<title>Sapatop</title>
	</head>
	<body>
		<!-- Menu tela grande -->
		<header>
			<div class="navbar-fixed">
				<nav style="background-color: #faf2ee" >
					<ul id="dropdown1" class="dropdown-content">
						<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
						<li><a href="logout.php">Sair</a></li>
						<?php } else { ?>
						<li><a href="login.php">Login</a></li>
						<li class="divider"></li>
						<li><a href="cadastrar.php">Cadastro</a></li>
						<?php } ?>
					</ul>
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="../tenis1.php">Tênis</a></li>
						<li><a href="../mule1.php">Mule</a></li>
						<li><a href="../scarpin1.php">Scarpin</a></li>
					</ul>
					<ul id="dropdown3" class="dropdown-content">
						<li><a href="../sapatilha1.php">Sapatilhas</a></li>
						<li><a href="../anabela1.php">Anabelas</a></li>
						<li><a href="../rasteira1.php">Rasteiras</a></li>
					</ul>
					<div class="nav-wrapper">
						<a href="../index.php" class="brand-logo center" style="font-family: 'Ranga', cursive; font-size:50px; color: #4b392e;">Sapatop</a>
						<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li><a class="dropdown-trigger" href="#!" data-target="dropdown1" style="color: #4b392e; font-size: 15px;"><i class="material-icons right">perm_identity arrow_drop_down</i></a></li>
						</ul>
						<ul class="right hide-on-med-and-down">
							<li><a class="" href="../promocoes.php" data-target="dropdown2" style="color: #4b392e; font-size: 15px;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Promoções<i class="material-icons right"></i></a></li>
						</ul>
						<ul class="right hide-on-med-and-down">
							<li><a class="dropdown-trigger" href="#!" data-target="dropdown2" style="color: #4b392e; font-size: 15px; font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Sapatos<i class="material-icons right">arrow_drop_down</i></a></li>
						</ul>
						<ul class="right hide-on-med-and-down">
							<li><a class="dropdown-trigger" href="#!" data-target="dropdown3" style="color: #4b392e; font-size: 15px;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Sandálias<i class="material-icons right">arrow_drop_down</i></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- Menu mobile -->
			<ul class="sidenav" id="mobile-demo">
				<li><a href="#" style="color: #4b392e;">Minha conta</a></li>
				<li><a href="#" style="color: #4b392e;">Sandálias</a></li>
				<li><a href="#" style="color: #4b392e;">Sapatos</a></li>
				<li><a href="#!" style="color: #4b392e;">Promoções<i class="material-icons right"></i></a></li>
				<li><a href="sobre.php" style="color: #4b392e;">Sobre</a></li>
				<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
				<li><a href="logout.php" style="color: #4b392e;">Sair</a></li>
				<?php } else { ?>
				<li class="divider"></li>
				<li><a href="login.php" style="color: #4b392e;">Login</a></li>
				<li><a href="cadastrar.php" style="color: #4b392e;">Cadastro</a></li>
				<?php } ?>
				
			</header>
			<form method="POST" action="valida.php">
				<h2 style="color: #513f36;">Área de login</h2>
				<label class="usuario" style="position: absolute; top: 38%; left: 11.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: #513f36; font-size: 15px;">Usuário</label>
				<input type="text" name="usuario" placeholder="Digite o seu usuário" required><br><br>
				
				<label class="senha" style="position: absolute; top: 62%; left: 10.5%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: #513f36; font-size: 15px;">Senha</label>
				<input type="password" name="senha" placeholder="Digite a sua senha" required><br><br>
				
				<input type="submit" name="btnLogin" value="Acessar" style=" position: absolute; top: 100%; left: 18%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; color: white; background-color: #513f36;" class=" btn #6a1b9a">
				
				<ul class="right hide-on-med-and-down">
					<li><a class="waves-effect waves-light btn #6a1b9a" href="cadastrar.php" style=" position: absolute; top: 100%; left: 72%; margin-right: -50%; transform: translate(-50%, -50%); text-align: center; background-color: #513f36;">Cadastre-se aqui</a></li>
				</ul>
			</form>
			<br><br><br>
			<!-- Jquery -->
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
			<!-- Materialize JS -->
			<script type="text/javascript" src="../js/materialize.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
			$('.modal').modal();
			$('.sidenav').sidenav();
			$('.slider').slider();
			$('.collapsible').collapsible();
			$('.materialboxed').materialbox();
			});
			</script>
			<script type="text/javascript">
			var instance = M.Carousel.init({
			fullWidth: true
			});
			// Or with jQuery
			$('.carousel.carousel-slider').carousel({
			fullWidth: true
			});
			</script>
			<script type="text/javascript">
			// CAROUSEL
			$(document).ready(function(){
			$('.carousel').carousel(
			{
			dist: 0,
			padding: 0,
			fullWidth: true,
			indicators: true,
			duration: 100,
			}
			);
			});
			autoplay()
			function autoplay() {
			$('.carousel').carousel('next');
			setTimeout(autoplay, 4500);
			}
			</script>
			<script type="text/javascript">
			$(".dropdown-trigger").dropdown();
			</script>
		</body>
	</html>