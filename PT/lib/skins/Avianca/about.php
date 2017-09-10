<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="icon" href="<?php echo SITE_URL?>/lib/skins/Avianca/img/favicon.ico" type="image/x-icon"/>

    <title>
      Sobre Nós | Avianca Virtual
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/css/theme.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/Avianca/css/flexslider.css"/>
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/Avianca/css/animate.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">



    <!-- Custom styles for this template -->
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/css/style.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/Avianca/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="http://www.aviancavirtual.net/assets/img/logo.png" alt="logo" style="width:250px; height:auto;"></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><a href="<?php echo SITE_URL?>/index.php">Home</a></li>
                  <li class="dropdown active">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Corporativo <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="active">
                              <a href="<?php echo SITE_URL?>/index.php/about">Quem Somos</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/staff">Administradores</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/rules">Regulamentos</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/contact">Fale Conosco</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Operações <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/fleet">Frota</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/airports">Destinos</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Membros <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/pilots">Tripulantes</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/rank">Plano de Carreira</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/awards">Awards</a>
                          </li>
                      </ul>
                  </li>
                  <li><a href="<?php echo SITE_URL?>/index.php/registration">Voe Conosco</a></li>
                  <li><a href="<?php echo SITE_URL?>/index.php/acars">Tracking</a></li>
                  <?php if(!Auth::LoggedIn())
                          {
							  ?>
                          <li><a href="<?php echo SITE_URL?>/index.php/login">Login</a></li>
                          <?php
						  }
                          ?>
                  <?php if(Auth::LoggedIn())
                          {
							  ?>
                          <li><a href="http://latamvirtual.tk/index.php/profile">D.O.V</a></li>
                          <?php
						  }
                          ?>                  
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Sobre Nós
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="pull-right">
              <h1 class="pequeno">Avianca Virtual</h1>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft">
             <img src="http://oi63.tinypic.com/bhnb6g.jpg" alt="" width="480" height="220">      
          </div>
        </div>
        <div class="col-lg-7 about wow fadeInRight">
        <h1>Sobre Nós</h1>
 Mais que apenas um site, ou uma Virtual Airline buscamos ampliar os horizontes da simulação de voo tomando como base uma das principais companhias aéreas da América Latina, a Avianca Airlines. Nossa Virtual Airline surgiu da união de amigos que como semelhança possuíam a paixão por aviação. Nossa missão vai além de criar uma Virtual Airline e estabelecê-la com sucesso entre as redes de voo,visamos propiciar um ambiente agradável para tripulantes virtuais onde estes possam dividir experiências, agregar seus conhecimentos e claro voar, de maneira satisfatória se sentindo parte de uma grande companhia em que ele pode confiar. Não temos qualquer vínculo com a Avianca Airlines S/A. Somos apenas um Fã-Clube.
        </div>
      </div>
      <div class="row">
        <div class="hiring">
          <h2 class="wow flipInX">
            Nossas estatísticas
          </h2>
           <div class="col-lg-3 col-xs-6 wow zoomIn">
              <!-- small box -->
              <div class="small-box bg-roxo">
                <div class="inner">
                  <h3><?php echo StatsData::PilotCount(); ?></h3>
                  <p>Tripulantes</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6 wow zoomIn">
              <!-- small box -->
              <div class="small-box bg-roxo">
                <div class="inner">
                  <h3><?php echo StatsData::TotalSchedules(); ?></h3>
                  <p>Rotas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-map-marker"></i>
                </div>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6 wow zoomIn">
              <!-- small box -->
              <div class="small-box bg-roxo">
                <div class="inner">
                  <h3><?php echo StatsData::TotalAircraftInFleet(); ?></h3>
                  <p>Aeronaves</p>
                </div>
                <div class="icon">
                  <i class="fa fa-plane"></i>
                </div>
              </div>
            </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6 wow zoomIn">
              <!-- small box -->
              <div class="small-box bg-roxo">
                <div class="inner">
                  <h3><?php echo StatsData::TotalFlights(); ?></h3>
                  <p>Voos</p>
                </div>
                <div class="icon">
                  <i class="fa fa-paper-plane"></i>
                </div>
              </div>
            </div><!-- ./col -->

        </div>
      </div>
    </div>

    <div class="gray-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <!--testimonial start-->
            <div class="about-testimonial boxed-style about-flexslider ">
              <section class="slider wow fadeInRight">
                <div class="flexslider">
                  <ul class="slides about-flex-slides">
                    <li>
                      <div class="about-testimonial-image ">
                        <img alt="" src="<?php echo SITE_URL?>/lib/skins/Avianca/img/2.png">
                      </div>
                      <a class="about-testimonial-author" href="#">
                        Leonardo da Vinci
                      </a>
                      <span class="about-testimonial-company">
                        
                      </span>
                      <div class="about-testimonial-content">
                        <p class="about-testimonial-quote">
                          Uma vez que você tenha experimentado voar, você andará pela terra com seus olhos voltados para céu, pois lá você esteve e para lá você desejará voltar.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="about-testimonial-image ">
                        <img alt="" src="<?php echo SITE_URL?>/lib/skins/Avianca/img/3.png">
                      </div>
                      <a class="about-testimonial-author" href="#">
                        Martin Luther King. Jr.
                      </a>
                      <span class="about-testimonial-company">
                      </span>
                      <div class="about-testimonial-content">
                        <p class="about-testimonial-quote">
                          Se não puder voar, corra. Se não puder correr, ande. Se não puder andar, rasteje, mas continue em frente de qualquer jeito.
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
            <!--testimonial end-->
          </div>
          <div class="col-lg-7" id="skillz">
            <h3 class="skills">
              Nossas Metas
            </h3>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_one">
                <p>
                  Aeronaves Inseridas : <?php echo round((StatsData::TotalAircraftInFleet() / 314) * 100)."%"; ?> Completo
                </p>
              </div>
            </div>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_two">
                <p>
                  Html/CSS : 90% Complete
                </p>
              </div>
            </div>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_three">
                <p>
                  Wordpress : 70% Complete
                </p>
              </div>
            </div>

            <div class="skill_bar">
              <div class="skill_bar_progress skill_four">
                <p>
                  Graphic Design : 55% Complete
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              Contato
            </h1>
            <address>
              <p><i class="fa fa-mobile pr-10 icone"></i>Teamspeak Somente Para Pilotos</p>
              <p><i class="fa fa-whatsapp pr-10 icone"></i>Entrar no Grupo do Whatsapp</p>
              <p><i class="fa fa-envelope pr-10 icone"></i>Email :   <a href="javascript:;">contato@Aviancavirtual.tk</a></p>
            </address>
          </div>
          <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
            <h1>CHANGELOG</h1>
         <div id="owl-slide">
                    <div class="tweet-box">
                     08/05 | 
                    <span class="label label-danger">0.1a</span> Lançamento Oficial
                </div>
                    </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>
                Voos Online
              </h1>
              <ul class="page-footer-list">
                <?php
$results = ACARSData::GetACARSData();
if (count($results) > 0)
{
foreach($results as $flight)
         {
                
                 ?>
                     <?php echo $flight->flightnum;?> - <?php echo $flight->depname;?>/<?php echo $flight->arrname;?>
                                         <?php if($flight->phasedetail
!= 'Paused') { echo $flight->phasedetail; }
else { echo "Cruise"; }?>
                                 <?php          
                         }
                 } else { ?>
                                        Sem Pilotos Voando Atualmente.
                                 <?php
                 }
                 ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>
                QUEM SOMOS
              </h1>
              <p>
                A Avianca Virtual é uma organização virtual movida por entusiastas da aviação que busca simular com seriedade, qualidade e precisão as operações do Grupo LATAM Airlines nos simuladores de vôo da Microsoft e online nas redes internacionais de vôo virtual, IVAO e VATSIM.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="skype:arthur.hetem?chat"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; Copyright <?php echo date("Y");?> Avianca Virtual.  Todos os direitos reservados.</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/jquery.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/Avianca/js/hover-dropdown.js">
    </script>
    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/Avianca/assets/bxslider/jquery.bxslider.js">
    </script>
    <script defer src="<?php echo SITE_URL?>/lib/skins/Avianca/js/jquery.flexslider.js">
    </script>

    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/jquery.easing.min.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/link-hover.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/wow.min.js">
    </script>


    <!--common script for all pages-->
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/common-scripts.js">
    </script>


    <script>

      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();


      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        }
                                   );
      }
                    );




      $(window).scroll(function() {
        $('#skillz').each(function(){
          var imagePos = $(this).offset().top;
          var viewportheight = window.innerHeight;

          var topOfWindow = $(window).scrollTop();
          if (imagePos < topOfWindow+viewportheight) {
            $('.skill_bar').fadeIn('slow');
            $('.skill_one').animate({
              width:'<?php echo round((StatsData::TotalAircraftInFleet() / 314) * 100)."%"; ?>'}
                                    , 2000);
            $('.skill_two').animate({
              width:'90%'}
                                    , 2000);
            $('.skill_three').animate({
              width:'70%'}
                                      , 1000);
            $('.skill_four').animate({
              width:'55%'}
                                     , 1000);
            $('.skill_bar_progress p').fadeIn('slow',function(){

            }
                                             );
          }
        }
                         );
      }
                      );




    </script>

  </body>
</html>
