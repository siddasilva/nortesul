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
      Contato | Avianca Virtual
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
<script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/html5shiv.js">
</script>
<script src="<?php echo SITE_URL?>/lib/skins/Avianca/js/respond.min.js">
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
                  <li><a href="<?php echo SITE_URL?>/index.php/">Home</a></li>
                  <li class="dropdown active">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Corporativo <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/about">Quem Somos</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/staff">Administradores</a>
                          </li>
                          <li>
                              <a href="<?php echo SITE_URL?>/index.php/rules">Regulamentos</a>
                          </li>
                          <li class="active">
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
             Fale Conosco
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

    <div class="container" id="tourpackages-carousel">
      <form method="post" action="<?php echo url('/contact'); ?>" class="form-group">
  <table width='100%' border='0'>
    <tr>
      <td><strong>Nome:</strong></td>
      <td>
		<?php
		if(Auth::LoggedIn())
		{
			echo Auth::$userinfo->firstname .' '.Auth::$userinfo->lastname;
			echo '<input type="hidden" name="name"
					value="'.Auth::$userinfo->firstname
							.' '.Auth::$userinfo->lastname.'" />';
		}
		else
		{
		?>
			<input type="text" name="name" value="" />
			<?php
		}
		?>
      </td>
    </tr>
    <tr>
		<td width="1%" nowrap><strong>E-Mail:</strong></td>
		<td>
		<?php
		if(Auth::LoggedIn())
		{
			echo Auth::$userinfo->email;
			echo '<input type="hidden" name="name"
					value="'.Auth::$userinfo->email.'" />';
		}
		else
		{
		?>
			<input type="text" name="email" value="" class="form-control" />
			<?php
		}
		?>
		</td>
	</tr>

	<tr>
		<td><strong>Assunto: </strong></td>
		<td><input type="text" name="subject" value="<?php echo $_POST['subject'];?>" /></td>

	</tr>
    <tr>
      <td><strong>Mensagem:</strong></td>
      <td>
		<textarea name="message" cols='45' rows='5'><?php echo $_POST['message'];?></textarea>
      </td>
    </tr>
    <tr>
		<td>
			<input type="hidden" name="loggedin" value="<?php echo (Auth::LoggedIn())?'true':'false'?>" />
		</td>
		<td>
          <input type="submit" name="submit" value='Enviar'>
		</td>
    </tr>
  </table>
</form>
      <!-- End container -->
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
              <p><i class="fa fa-envelope pr-10 icone"></i>Email :   <a href="javascript:;">contato@aviancavirtual.tk</a></p>
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
                A Avianca Virtual é uma organização virtual movida por entusiastas da aviação que busca simular com seriedade, qualidade e precisão as operações do Grupo Avianca Airlines nos simuladores de vôo da Microsoft e online nas redes internacionais de vôo virtual, IVAO e VATSIM.
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
  </body>
</html>
