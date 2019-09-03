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
            <link rel="stylesheet" type="text/css" href="css/style.css">
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
                <nav class="purple darken-4">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo" style="font-family: 'Ranga', cursive; left: 150px; font-size:50px;">Sapatop</a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
                    <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="./cadastro/logout.php">Sair</a></li>
                  <?php } else { ?>
                            <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="./cadastro/login.php">Login</a></li>
                <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="./cadastro/cadastrar.php">Cadastro</a></li>
              <?php } ?>
                        </ul>
                    </div>
                </nav>

          <!-- Menu mobile -->
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="#">Login</a></li>
          <li><a class="waves-effect waves-light btn #6a1b9a purple darken-3" href="#">Cadastro</a></li>
            </header>

       <section>
            <h3 class="center-align">Quem somos</h3>
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <p class="maven">
                            Sejam Bem vindos a Nossa Empresa, entramos no ramo de calçados em 2019, sempre trazendo os melhores produtos e o melhor preço e claro a melhor experiência de compra ONLINE, com diversos tipos de marcas que atendem a todos os gostos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <p class="maven">
                            Sobre a Sapatop
                            <br><br>
                            A Sapatop é a maior rede de calçados de Caraguatatuba. Com quase 2 anos de experiência, construiu uma forte relação de cumplicidade e intimidade com os clientes, conhecendo e acompanhando suas necessidades e anseios.

                            A proposta da marca é ser íntima e cúmplice dos clientes e seus sonhos, oferecendo a eles acesso a calçados de qualidade, considerando sua diversidade e respeitando as tendências internacionais. Ao longo de sua história, a Sapatop é conhecida e reconhecida por seu slogan “Sapato bpm, sapato top, sapatop!”.
                            <br><br>
                            Está presente hoje em todas as regiões de Caraguatatuba e conta com aproximadamente 10 lojas nas melhores ruas e shoppings da cidade. É uma das pioneiras do setor no e-commerce, oferecendo seus produtos pela sua loja virtual há 2 anos.
                            <br><br>
                            A Sapatop também possui uma divisão de produtos e serviços financeiros, associada ao financiamento de suas clientes, que amplia o valor e o acesso aos seus produtos.
                            
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="servicos purple darken-4">
            <div class="container">
                <div class="row">
                    <h3 class="center-align white-text">Serviços</h3>
                    <p class="center-align white-text">
                        Um pouco de nosso serviço.
                    </p>
                    <div class="col s12 m6 l3 center center-align">
                        <div class="center promo promo-example">
                            <i class="large material-icons white-text">flash_on</i>
                            <p class="promo caption white-text">Rapidez</p>
                            <p class="marven center white-text">
                                Nossa especialidade é fazer as entregas desejadas em um menor tempo possivel para a satisfação de nossos clientes que consumirem nosso produto.
                            </p>
                        </div>
                        <!--  -->
                    </div>
                    <div class="col s12 m6 l3 center center-align">
                        <div class="center promo promo-example">
                            <i class="large material-icons white-text">group</i>
                            <p class="promo caption white-text">Equipe</p>
                            <p class="marven center white-text">
                                Nossa equipe se empenha para que cada vez mais podemos atender a todos os pedidos dos clientes sempre que possivel.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 center center-align">
                        <div class="center promo promo-example">
                            <i class="large material-icons white-text">cloud</i>
                            <p class="promo caption white-text">Seus dados</p>
                            <p class="marven center white-text">
                                Para nossa é de extrema importância que seus dados estejam seguros ao realizar uma compra ou o cadastro em nosso site.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 center center-align">
                        <div class="center promo promo-example">
                            <i class="large material-icons white-text">settings</i>
                            <p class="promo caption white-text">Opções</p>
                            <p class="marven center white-text">
                                Temos várias opções para que os clientes tenham uma escolha ampla para a compra de produtos, pagamentos e entregas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contato">
            <div class="row">
                <h3 class="center-align">Onde nos encontrar</h3>
                <div class="col s12 l7">
                    <div class="video-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7310.201905621735!2d-45.42190333122983!3d-23.63655540739246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd631551d2d585%3A0xbe6efd4b81fb3cd0!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o%2C+Ci%C3%AAncia+e+Tecnologia+de+S%C3%A3o+Paulo%2C+Campus+Caraguatatuba!5e0!3m2!1spt-BR!2sbr!4v1541092978472" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col s12 l4">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">add_location</i>Endereço</div>
                            <div class="collapsible-body"><span>Av. Bahia, 1739 - Indaiá<br>Caraguatatuba - SP</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">tram</i>CEP</div>
                            <div class="collapsible-body"><span>11665-071</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">local_phone</i>Telefone</div>
                            <div class="collapsible-body"><span>(12) 3885-2130</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

       <!-- Footer -->
            <footer class="page-footer purple darken-4">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <span class="titulo">Categorias</span>
                    <ul class="total_itens">
                      <li><a class="white-text" href="feminino.html">Feminino</li></a>
                        <li><a class="white-text" href="Masculino.html">Masculino</li></a>
                      </ul>
                        </div>

                        <div class="col s12 m6 l3">
                            <h5 class="white-text">Redes Sociais</h5>
                            
                                <a class="white-text" href="https://www.facebook.com/Sapatop-1853076451470888/"><i class="fab fa-facebook-square"></a></i>
                          <a class="white-text" href="https://twitter.com/sapatop1"><i class="fab fa-twitter-square"></a></i>
                          <a class="white-text" href="https://www.instagram.com/sapatopifsp"><i class="fab fa-instagram"></a></i>
                          <a class="white-text" href="https://www.tumblr.com/blog/sapatopifsp"><i class="fab fa-tumblr-square"></a></i>
                          <a class="white-text" href="https://br.pinterest.com/sapatop/"><i class="fab fa-pinterest-square"></a></i>
                          <br></br>
                          As fotos aqui veiculadas, logotipo e marca são de propriedade do site www.sapatop.com.br. É vetada a sua reprodução, total ou parcial, sem a expressa autorização da administradora do site Sapatop.<br></br>

                           Sapatop calçados S/A - CNPJ: 85.833.642/0001-24 - Av. Bahia, 1739  - Indaía, São Paulo - SP, 11665-071
                            
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2019 Sapatop - Todos os direitos reservados
                    </div>
                </div>
            </footer>
        <!-- Jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <!-- Materialize JS -->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.slider').slider();
                $('.parallax').parallax();
                $('.collapsible').collapsible();
            });
        </script>
    </body>
</html>