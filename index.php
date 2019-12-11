<?php
require_once "functions/product.php";
$pdoConnection = require_once "connection.php";
$products = getProducts($pdoConnection);
?>
<?php include_once("conexao.php");
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; //
$result_curso = "SELECT * FROM produtos  where novidades = 1";
$resultado_curso = mysqli_query($conn, $result_curso);
$total_cursos = mysqli_num_rows($resultado_curso); //
$quantidade_pg = 12; //
$num_pagina = ceil($total_cursos/$quantidade_pg); //
$incio = ($quantidade_pg*$pagina)-$quantidade_pg; //
$result_cursos = "SELECT * FROM produtos where novidades = 1 limit $incio, $quantidade_pg" ;
$resultado_cursos = mysqli_query($conn, $result_cursos);
$total_cursos = mysqli_num_rows($resultado_cursos); //


$pagina2 = (isset($_GET['pagina']))? $_GET['pagina'] : 1; //
$result_curso2 = "SELECT * FROM produtos  where destaques = 1";
$resultado_curso2 = mysqli_query($conn, $result_curso2);
$total_cursos2 = mysqli_num_rows($resultado_curso2); //
$quantidade_pg2 = 12; //
$num_pagina2 = ceil($total_cursos2/$quantidade_pg2); //
$incio2 = ($quantidade_pg2*$pagina2)-$quantidade_pg2; //
$result_cursos2 = "SELECT * FROM produtos where destaques = 1 limit $incio, $quantidade_pg" ;
$resultado_cursos2 = mysqli_query($conn, $result_cursos2);
$total_cursos2 = mysqli_num_rows($resultado_cursos2); //
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Sapatop</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel='stylesheet' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css'>
    <!-- sei la-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css'><link rel="stylesheet" href="./style.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
  </head>
  <body style="background-color: white;">
    <header>
      <div class="navbar-fixed">
        <nav style="background-color: #faf2ee" >
          <ul id="dropdown1" class="dropdown-content">
            <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
            <li><a href="carrinho.php">Carrinho</a></li>
            <li class="divider"></li>
            <li><a href="cadastro/administrativo.php">Conta</a></li>
            <li class="divider"></li>
            <li><a href="./cadastro/logout.php">Sair</a></li>
            <?php } else { ?>
            <li><a href="carrinho.php">Carrinho</a></li>
            <li class="divider"></li>
            <li><a href="./cadastro/login.php">Login</a></li>
            <li class="divider"></li>
            <li><a href="./cadastro/cadastrar.php">Cadastro</a></li>
            <?php } ?>
          </ul>
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="tenis1.php">Tênis</a></li>
            <li><a href="mule1.php">Mule</a></li>
            <li><a href="scarpin1.php">Scarpin</a></li>
          </ul>
          <ul id="dropdown3" class="dropdown-content">
            <li><a href="sapatilha1.php">Sapatilhas</a></li>
            <li><a href="anabela1.php">Anabelas</a></li>
            <li><a href="rasteira1.php">Rasteiras</a></li>
          </ul>
          <div class="nav-wrapper">
            <a href="index.php" class="brand-logo center" style="font-family: 'Ranga', cursive; font-size:50px; color: #4b392e;">Sapatop</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1" style="color: #4b392e; font-size: 15px;"><i class="material-icons right">perm_identity arrow_drop_down</i></a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li><a class="" href="promocoes.php" data-target="dropdown2" style="color: #4b392e; font-size: 15px;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Promoções<i class="material-icons right"></i></a></li>
            </ul>
            
            <ul class="right hide-on-med-and-down">
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown2" style="color: #4b392e; font-size: 15px; font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Sapatos<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown3" style="color: #4b392e; font-size: 15px;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Sandálias<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <?php if(isset($_SESSION['id']) && !empty($_SESSION['id']) and ($_SESSION['id'] == 1)) { ?>
            <ul class="left hide-on-med-and-down">
              <li><a class="" href="addimage/upload_imagem.php" data-target="dropdown2" style="color: #4b392e; font-size: 15px;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;">Adicionar Novo Produto<i class="material-icons right"></i></a></li>
            </ul>
            <?php }else {  ?>
            <?php } ?>
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
        <li><a href="./cadastro/logout.php" style="color: #4b392e;">Sair</a></li>
        <?php } else { ?>
        <li class="divider"></li>
        <li><a href="./cadastro/login.php" style="color: #4b392e;">Login</a></li>
        <li><a href="./cadastro/cadastrar.php" style="color: #4b392e;">Cadastro</a></li>
        <?php } ?>
        
      </header>
      <div class="container-fluid" style="padding-left: 0; padding-right: 0">
        <div class="row">
          <div class="col s12" style="padding: 0;">
            <section class="">
              <div class="carousel carousel-slider" data-indicators="true">
                <div class="carousel-fixed-item"></div>
                <div class="carousel-item" href="#one!" >
                  <img src="img/banner.png">
                </div>
                <div class="carousel-item" href="#one!">
                  <img src="img/banner2.png">
                </div>
                <div class="carousel-item" href="#one!">
                  <img src="img/banner3.png">
                </div>
                <div class="carousel-item" href="#one!">
                  <img src="img/banner4.png">
                </div>
                <!--             <div class="" style="float: right; ">
                  <a class="btn waves-effect white grey-text darken-text-2" style="border: 0; border-radius: 0;">Editar</a>
                </div> -->
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col s12 m6 l3">
            <img src="img/tarja_final1.jpg">
          </div>
          <div class="col s12 m6 l3">
            <img src="img/tarja_final2.png">
          </div>
          <div class="col s12 m6 l3">
            <img src="img/tarja_final3.png">
          </div>
          <div class="col s12 m6 l3">
            <img src="img/tarja_final4.png">
          </div>
        </div>
      </div>
      <h3 class="center-align" style="color: #4b392e">Novidades</h3>
      <div class="container-fluid">
        <div class="row">
          <div class="col s12">
            <section id="owl-1">
              <div class="owl-carousel owl-theme">
                <!--Card 1-->
                <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="products.php?id_curso=<?php echo $rows_cursos['id']; ?>">
                    <img class="activator" src="img/<?php echo $rows_cursos['caminho_img']; ?>">
                  </a>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4 center">R$<?php echo number_format($rows_cursos['preco'], 2, ',', '.')?></span>
                    <p class="center"><a href="carrinho.php?acao=add&id=<?php echo $rows_cursos['id']?>" style="color: #c2927c" class="center" target="_blank">ADICIONAR AO CARRINHO</a></p>
                  </div>
                  <div class="center">
                <?php if(isset($_SESSION['id']) && !empty($_SESSION['id']) and ($_SESSION['id'] == 1)) { ?>
                <a href="editaproduto/editar.php?id=<?php echo $rows_cursos['id']; ?>" class="btn-floating center" style="background-color: #4b392e"><i class="material-icons center">edit</i></a>
                <td><a href="#modal<?php echo $rows_cursos['id']; ?>" class="btn-floating modal-trigger center" style="background-color: #4b392e"><i class="material-icons center">delete</i></a></td>
                <?php }else {  ?>
                <?php } ?>
                
              </div>
              <div id="modal<?php echo $rows_cursos['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Opa!</h4>
                  <p>Tem certeza que deseja excluir esse produto?</p>
                </div>
                <div class="modal-footer">
                  <form action="deleteproduto/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $rows_cursos['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                  </form>
                </div>
              </div>
                </div>
                <?php } ?>
                <!--Fim dos Cards-->
              </div>
            </section>
          </div>
        </div>
      </div>
               
      <h3 class="center-align" style="color: #4b392e">Destaques</h3>
      <div class="container-fluid">
        <div class="row">
          <div class="col s12">
            <section id="owl-1">
              <div class="owl-carousel owl-theme">
                <!--Card 1-->
                <?php while($rows_cursos2 = mysqli_fetch_assoc($resultado_cursos2)){ ?>
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="products.php?id_curso=<?php echo $rows_cursos2['id']; ?>">
                    <img class="activator" src="img/<?php echo $rows_cursos2['caminho_img']; ?>">
                  </a>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4 center">R$<?php echo number_format($rows_cursos2['preco'], 2, ',', '.')?></span>
                    <p class="center"><a href="carrinho.php?acao=add&id=<?php echo $rows_cursos2['id']?>" style="color: #c2927c" class="center" target="_blank">ADICIONAR AO CARRINHO</a></p>
                  </div>
                  <div class="center">
                <?php if(isset($_SESSION['id']) && !empty($_SESSION['id']) and ($_SESSION['id'] == 1)) { ?>
                <a href="editaproduto/editar.php?id=<?php echo $rows_cursos2['id']; ?>" class="btn-floating center" style="background-color: #4b392e"><i class="material-icons center">edit</i></a>
                <td><a href="#modal<?php echo $rows_cursos2['id']; ?>" class="btn-floating modal-trigger center" style="background-color: #4b392e"><i class="material-icons center">delete</i></a></td>
                <?php }else {  ?>
                <?php } ?>
                
              </div>
              <div id="modal<?php echo $rows_cursos2['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Opa!</h4>
                  <p>Tem certeza que deseja excluir esse produto?</p>
                </div>
                <div class="modal-footer">
                  <form action="deleteproduto/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $rows_cursos2['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                  </form>
                </div>
              </div>
                </div>
                <?php } ?>
                <!--Fim dos Cards-->
              </div>
            </section>
          </div>
        </div>
      </div>
      <footer class="page-footer" style="background-color: #f5e2d8;">
        <div class="container-fluid">
          <div class="row">
            <div class="col l3 s12">
              <h5 style="color: #674c4c">Atendimento</h5>
              <p class="text-lighten-4">
                <a class="text-lighten-3" style="color: #674c4c" href="duvidas.php">Perguntas Frequentes</a><br>
                <a class="text-lighten-3" style="color: #674c4c" href="trocadevolucao.php">Trocas e Cancelamentos</a><br>
                <a class="text-lighten-3" style="color: #674c4c" href="politicas.php">Política de Privacidade</a><br>
                <a class="text-lighten-3" style="color: #674c4c" href="sobre.php">Quem somos</a><br>
              </div>
              <div class="col l3 s12">
                <h5 style="color: #674c4c">Contato</h5>
                <p style="color: #674c4c">
                  Telefone: (51) 3564-6646<br>
                  Whatsapp: (51) 99273-9456<br>
                  Horário de atendimento:<br>
                  De segunda à quinta-feira: das 7:00 às 11:00 e das 13:00 às 17:00.<br>
                  De sexta:-feira: das 7:00 às 11:00 e das 13:00 às 16:00.<br>
                </p>
              </div>
              <div class="col l6 s12">
                <h5 style="color: #674c4c">Inscreve-se</h5><p>
                  <form action="/pagina-processa-dados-do-form" method="post">
                    <div>
                      <a class="text-lighten-3" style="color: #674c4c" href="#!">Inscreva-se para receber mais novidades!</a><p>
                      <input type="email" name="email" placeholder="Seu e-mail..." style="background-color: white;"><br>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col l3 s12">
                    
                  </div>
                  <div class="col l3 s12">
                    
                    <ul>
                      <li>
                        <h5 style="color: #674c4c">Redes Socias</h5>
                        <a href="https://www.instagram.com/sapatopifsp/">
                          <img src="https://www.constance.com.br/skin/frontend/constance-v2018/default/images/insta.svg">
						            </a>  
						            <a href="https://m.facebook.com/sapatop2019/">  
                          <img src="https://www.constance.com.br/skin/frontend/constance-v2018/default/images/facebook.svg">
						            </a>  
						            <a href="https://twitter.com/sapatop1">
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#674c4c"><path d="M172.215,35.905c-6.35594,2.82188 -13.16875,4.71656 -20.33094,5.57656c7.31,-4.38063 12.92687,-11.31438 15.56062,-19.565c-6.82625,4.04469 -14.41844,6.9875 -22.4675,8.57312c-6.45,-6.88 -15.64125,-11.16656 -25.81344,-11.16656c-19.53812,0 -35.38094,15.82937 -35.38094,35.3675c0,2.76812 0.3225,5.46906 0.92719,8.0625c-29.40125,-1.47813 -55.45656,-15.56063 -72.91187,-36.96656c-3.05031,5.24062 -4.78375,11.31437 -4.78375,17.79125c0,12.26844 6.235,23.09906 15.73531,29.455c-5.805,-0.18813 -11.26062,-1.78719 -16.03094,-4.43438c0,0.14781 0,0.29563 0,0.44344c0,17.14625 12.20125,31.43031 28.36656,34.69562c-2.95625,0.80625 -6.08719,1.23625 -9.31219,1.23625c-2.28438,0 -4.50156,-0.215 -6.665,-0.645c4.515,14.04219 17.57625,24.295 33.04281,24.57719c-12.09375,9.48688 -27.34531,15.13063 -43.92719,15.13063c-2.86219,0 -5.67062,-0.16125 -8.42531,-0.49719c15.64125,10.05125 34.23875,15.89656 54.22031,15.89656c65.06438,0 100.64688,-53.89781 100.64688,-100.63344c0,-1.53187 -0.04031,-3.07719 -0.09406,-4.58219c6.90687,-4.98531 12.9,-11.22031 17.64344,-18.31531z"></path></g></g></svg>
                        </a>
                      </ul>
                    </div>
                    <div class="col l5 s12">
                    </div>
                    <div class="col l1 s12">
                    </div>
                  </div>
                  <div class="footer-copyright" style="color: #674c4c">
                    <div class="container">
                      Sapatop ©2019 - Comercio de calcados LTDA | CNPJ - 30.901.791/0001-91
                      
                    </div>
                  </div>
                </footer>
                <!-- Gitter Chat Link -->
                <!-- partial -->
                
                <!-- Jquery -->
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
                <!-- Materialize JS -->
                <script type="text/javascript" src="js/materialize.min.js"></script>
                </script>
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
                <script src='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js'></script>
                <script src='code.js'></script>
                <script  src="./script.js"></script>
              </body>
            </html>