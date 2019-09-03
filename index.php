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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
      <nav style="background-color: #faf2ee">
        <ul id="dropdown1" class="dropdown-content">
          <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
          <li><a href="./cadastro/logout.php">Sair</a></li>
          <?php } else { ?>
          <li><a href="./cadastro/login.php">Login</a></li>
          <li class="divider"></li>
          <li><a href="./cadastro/cadastrar.php">Cadastro</a></li>
          <?php } ?>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="#!">one</a></li>
          <li><a href="#!">two</a></li>
          <li class="divider"></li>
          <li><a href="#!">three</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
          <li><a href="#!">one</a></li>
          <li><a href="#!">two</a></li>
          <li class="divider"></li>
          <li><a href="#!">three</a></li>
        </ul>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo center" style="font-family: 'Ranga', cursive; font-size:50px; color: #4b392e;">Sapatop</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1" style="color: #4b392e;"><i class="material-icons right">perm_identity arrow_drop_down</i></a></li>
          </ul>
          <ul class="right">
            <li><a href="#!" style="color: #4b392e;">Promoções<i class="material-icons right"></i></a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2" style="color: #4b392e;">Sapatos<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown3" style="color: #4b392e;">Sandalias<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>
      <!-- Menu mobile -->
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="feminino.php">Feminino</a></li>
        <li><a href="masculino.php">Masculino</a></li>
        <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="#">Login</a></li>
        <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="#">Cadastro</a></li>
        <li><a href="#!" style="color: #4b392e;">Promoções<i class="material-icons right"></i></a></li>
      </header>
      <!-- Slider -->
      <section class="black">
        <div class="carousel carousel-slider" data-indicators="true">
          <div class="carousel-fixed-item"></div>
          <div class="carousel-item" href="#one!" >
            <img src="img/banner02.png">
          </div>
          <div class="carousel-item" href="#one!">
            <img src="img/banner02.png">
          </div>
          <div class="carousel-item" href="#one!">
            <img src="img/banner02.png">
          </div>
          <div class="carousel-item" href="#one!">
            <img src="img/banner02.png">
          </div>
        </div>
      </section>

      <h3 class="center-align" style="">Novidades</h3>

      b


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
    </body>
  </html>