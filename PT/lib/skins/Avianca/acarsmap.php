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
      Voos no Momento | Avianca Virtual
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo fileurl('lib/js/jquery.form.js');?>"></script>
    <script type="text/javascript" src="<?php echo fileurl('lib/js/phpvms.js');?>"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=weather&sensor=false&key=AIzaSyAR_qo4aATPQQjCx36mXcqGONFNb5AkuIk"></script>

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
                  <li class="dropdown">
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
                  <li class="active"><a href="<?php echo SITE_URL?>/index.php/acars">Tracking</a></li>
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
                          <li><a href="http://Aviancavirtual.tk/index.php/profile">D.O.V</a></li>
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
             Voos no Momento
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
       <?php
/**
 * These are some options for the ACARS map, you can change here
 * 
 * By default, the zoom level and center are ignored, and the map 
 * will try to fit the all the flights in. If you want to manually set
 * the zoom level and center, set "autozoom" to false.
 * 
 * You can use these MapTypeId's:
 * http://code.google.com/apis/maps/documentation/v3/reference.html#MapTypeId
 * 
 * Change the "TERRAIN" to the "Constant" listed there - they are case-sensitive
 * 
 * Also, how to style the acars pilot list table. You can use these style selectors:
 * 
 * table.acarsmap { }
 * table.acarsmap thead { }
 * table.acarsmap tbody { }
 * table.acarsmap tbody tr.even { }
 * table.acarsmap tbody tr.odd { } 
 */
?>
<script type="text/javascript">
<?php 
/* These are the settings for the Google map. You can see the
	Google API reference if you want to add more options.
	
	There's two options I've added:
	
	autozoom: This will automatically center in on/zoom 
	  so all your current flights are visible. If false,
	  then the zoom and center you specify will be used instead
	  
	refreshTime: Time, in seconds * 1000 to refresh the map.
	  The default is 10000 (10 seconds)
*/
?>
var acars_map_defaults = {
	autozoom: true,
	zoom: 4,
    center: new google.maps.LatLng("<?php echo Config::Get('MAP_CENTER_LAT'); ?>", "<?php echo Config::Get('MAP_CENTER_LNG'); ?>"),
    mapTypeId: google.maps.MapTypeId.HYBRID,
    refreshTime: 10000,
	disableDefaultUI: true,
	zoomControl: true
};
</script>
<div class="mapcenter" align="center">
	<div id="acarsmap" style="width:1140px; height:940px;"></div>
</div>
<table id="tabledlist" class="table table-striped">
<thead>
	<tr>
		<td class="quadro roxo"><b>Tripulante</b></td>
		<td class="quadro roxo"><b>Voo</b></td>
		<td class="quadro roxo"><b>DEP <i class="fa fa-plane"></i> ARR</b></td>
		<td class="quadro roxo"><b>Altitude</b></td>
		<td class="quadro roxo"><b>Velocidade</b></td>
		<td class="quadro roxo"><b>Progresso</b></td>
	</tr>
</thead>
<tbody id="pilotlist"></tbody>
</table>
<script type="text/javascript" src="<?php echo fileurl('/lib/js/acarsmap.js');?>"></script>
<?php
/* This is the template which is used in the table above, for each row. 
	Be careful modifying it. You can simply add/remove columns, combine 
	columns too. Keep each "section" (<%=...%>) intact
	
	Variables you can use (what they are is pretty obvious)
	
	Variable:							Notes:
	<%=flight.pilotid%>
	<%=flight.firstname%>
	<%=flight.lastname%>
	<%=flight.pilotname%>				First and last combined
	<%=flight.flightnum%>
	<%=flight.depapt%>					Gives the airport name
	<%=flight.depicao%>
	<%=flight.arrapt%>					Gives the airport name
	<%=flight.arricao%>
	<%=flight.phasedetail%>
	<%=flight.heading%>
	<%=flight.alt%>
	<%=flight.gs%>
	<%=flight.disremaining%>
	<%=flight.timeremaning%>
	<%=flight.aircraft%>				Gives the registration
	<%=flight.aircraftname%>			Gives the full name
	<%=flight.client%>					FSACARS/Xacars/FSFK, etc
	<%=flight.trclass%>					"even" or "odd"
	
	You can also use logic in the templating, if you so choose:
	http://ejohn.org/blog/javascript-micro-templating/
*/
?>
<script type="text/html" id="acars_map_row">
<tr class="<%=flight.trclass%>">
<td><a href="<?php echo url('/profile/view');?>/<%=flight.pilotid%>"><%=flight.pilotid%> - <%=flight.pilotname%></a></td>
<td><%=flight.flightnum%></td>
<td><%=flight.depicao%> <i class="fa fa-plane"> <%=flight.arricao%></td>
<td><%=flight.alt%></td>
<td><%=flight.gs%></td>
<td>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <%=flight.percomplete%>%"><%=flight.percomplete%>%
    <span class="sr-only"><%=flight.percomplete%><%=flight.percomplete%>%</span>
  </div>
</div>
</td>
</tr>
</script>

<?php
/*	This is the template for the little map bubble which pops up when you click on a flight
	Same principle as above, keep the <%=...%> tags intact. The same variables are available
	to use here as are available above.
*/
?>
<script type="text/html" id="acars_map_bubble">
<span style="font-size: 10px; text-align:left; width: 100%" align="left">
<a href="<?php echo url('/profile/view');?>/<%=flight.pilotid%>"><%=flight.pilotid%> - <%=flight.pilotname%></a><br />
<strong>Flight <%=flight.flightnum%></strong> (<%=flight.depicao%> to <%=flight.arricao%>)<br />
<strong>Status: </strong><%=flight.phasedetail%><br />
<strong>Dist/Time Remain: </strong><%=flight.distremaining%> <?php echo Config::Get('UNITS');?> / <%=flight.timeremaining%><br />
</span>
</script>

<?php
/*	This is a small template for information about a navpoint popup 
	
	Variables available:
	
	<%=nav.title%>
	<%=nav.name%>
	<%=nav.freq%>
	<%=nav.lat%>
	<%=nav.lng%>
	<%=nav.type%>	2=NDB 3=VOR 4=DME 5=FIX 6=TRACK
 */
?>
<script type="text/html" id="navpoint_bubble">
<span style="font-size: 10px; text-align:left; width: 100%" align="left">
<strong>Name: </strong><%=nav.title%> (<%=nav.name%>)<br />
<strong>Type: </strong>
<?php	/* Show the type of point */ ?>
<% if(nav.type == 2) { %> NDB <% } %>
<% if(nav.type == 3) { %> VOR <% } %>
<% if(nav.type == 4) { %> DME <% } %>
<% if(nav.type == 5) { %> FIX <% } %>
<% if(nav.type == 6) { %> TRACK <% } %>
<br />
<?php	/* Only show frequency if it's not a 0*/ ?>
<% if(nav.freq != 0) { %>
<strong>Frequency: </strong><%=nav.freq%>
<% } %>
</span>
</script> 
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
