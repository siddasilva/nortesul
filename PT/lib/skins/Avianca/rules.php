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
      Regulamento | Avianca Virtual
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
                  <li><a href="<?php echo SITE_URL?>/index.php">Home</a></li>
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
                          <li class="active">
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
             Codigo de Conduta
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

      <div class="row">
        <div class="profile">
          <h2>
            Regulamento <b class="cor">Avianca Virtual</b>
            <br>
            <small>Leia atentamente todo o <b class="cor">regulamento</b>, ele é de ciência obrigatória de todos os tripulantes.</small>
          </h2>
          <hr>
          <h3>1ª Cláusula</h3>
          <hr>
            <h4>Considerações Iniciais</h4>
                <p>1º§ - <b>Avianca Virtual é uma organização sem fins lucrativos e promocionais, voltada apenas ao entretenimento, à aviação virtual e ao conhecimento e aprendizado sobre aviação, expressamente dizemos que não possui vínculos com a empresa real</b>.  <br>
            	2º§ - As vagas para cadastro serão disponibilizados na medida do afastamento de membros inativos. Para a composição de seus tripulantes a Avianca Virtual manterá suas inscrições abertas até que haja 100 (cem) pilotos em seu quadro de pilotos.  <br>
	 		   	3º§ - Todos os pilotos assim que registrados poderão realizar os voos pela VA. <br>
	  			4º§ - Possuimos vínculos com a rede de voo virtual VATSIM (link pode ser encontrado na página inicial). <br>
         		5º§ - É explicitamente <i>proíbido</i> voo fora das redes VATSIM / IVAO, os voos efetuados fora das redes serão excluídos automaticamente. </p>
            <br>
            <hr>
            <h3>2ª Cláusula</h3>
            <hr>
             <h4>Permanência e Conduta</h4>
                <p>1º§ - Pilotos que não efetuarem voos, a contar do dia de cadastro, em um prazo de 10 (dez) dias serão inativados, 
				o mesmo terá 5 (cinco) dias para reativar sua conta, caso contrário será excluído automaticamente da empresa. <br>
				2º§ - Os afastamentos somente serão permitidos com o <b>aviso prévio</b> do tripulante. <br>
				3º§ - Nenhum ato de agressão verbal (diz-se agressão verbal por violência verbal em canais de comunicação) 
				à qualquer um dos membros não será perdoado pela equipe do STAFF e o piloto agressor será expulso da VA,
				sem direito algum de posteriormente se cadastrar novamente. <br>
				4º§ - Pilotos que usarem o nome da VA para fins lucrativos ou outros meios que podem prejudicar a imagem da VA 
				serão excluídos sem direito de reingresso.<br>
				5º§ - Qualquer tentativa de danos, ações mal intencionadas ou tentativas de acesso à areas não permitidas ao cargo do tripulante, nesta organização acarretará ao infrator o <b>banimento</b> do mesmo, ou seja, não terá mais permissão de voar pela VA.</p> 
                <br>
            <hr>
            <h3>3ª Cláusula</h3>
            <hr> 
              <h4>Sistema de voos</h4>
                <p>1º§ - A Avianca Virtual usa um sistema de voos eficiente e prático, o piloto pode escolher em criar uma escala ou reservar um voo. <br>
				2º§ - Na utilização de escalas o piloto tem como obrigação seguir os voos presentes na escala estipuladas e na ordem em que estão. <br>
				3º§ - O não seguimento da escala acarretará na exclusão do voo efetuado, não somando assim as horas do voo para o tripulante. <br>
				4º§ - No modo de reserva de voos o piloto pode reservar um voo que conste dentro de nosso quadro de rotas.<br> 
				5º§ - Nos voos que tenham sido notados o <b>uso de aceleração do tempo, slew ou stop, serão excluídos.</b> <br>
                6º§ - O tripulante que enviar 3 Logs que excedam algum limite operacional estipulado pela V.A, será afastado para realizar um check prático. Nesse check serão abordados assuntos referentes ao equipamento em que ele está homologado, bem como perguntas de <b>METEOROLOGIA, REGULAMENTO DE TRAFEGO, NAVEGAÇÃO, TEORIA DE VOO e CONHECIMENTOS TÉCNICOS.</b> <br>
                7º§ - É importante ressaltar que a realização deste check <b>NÃO</b> garantirá o retorno do tripulante ao quadro de pilotos. Caso reprove no check, ele será permanentemente removido do quadro de pilotos Aviancav.<br>
				8º§ - Na lista de voos, estarão listados apenas os aeroportos aprovados a cada patente, de acordo com os parâmetros apresentados no D.O.V. (Despacho Operacional Virtual). Todos os voos dispostos na nossa tabela são da malha aérea apresentada pela Avianca.<br>
				9º§ - A Avianca Virtual possui um plano de carreira onde classificará os pilotos em 5 (cinco) classes. </p>  
                 <br>
            <hr>
            <h3>4ª Cláusula</h3>
            <hr>
            <h4>Registro dos voos</h4>
                <p>1º§ - Os registros de voo são enviados via fsacars.<br>
                  2º§ - O sistema faz uma análise e determinará uma nota de acordo com os resultados obtidos na leitura dos registros do registro de voo, esta avaliação é realizada de acordo com os padrões do F.O.Q.A. (Flight Operational Quality Assurance) disponíveis no D.O.V. e em outras normas descritas neste regulamento; caso sinta-se injustiçado o piloto poderá solicitar a reavaliação dentro do próprio log. <br>
                  3º§ - Os logs com pedidos de reavaliação serão feitos por um membro do STAFF que possui tal competência para realiza-lo, estes pedidos serão cumpridos dentro do prazo de 24 horas.<br>
                  4º§ - É explicitamente <i>proíbido</i> voo fora das rede VATSIM, os voos efetuados fora das rede serão excluídos automaticamente.<br>
                  5°§ - O piloto é responsável pelo envio do LOG sendo OBRIGATORIO adicionar um comentário caso o LOG apresente qualquer irregularidade fora padrão SOP.<br>
6°§ - Será de responsabilidade dos membros nomeados pelo staff analise dos Logs enviados e será inserido no campo ADD COMENT o feedback  referente aos itens observados.<br>
7°§ O Tripulante poderá entrar em contato a qualquer momento com o DEPARTAMENTO DE TREINAMENTO utilizando o INTRAMAIL clicando em SOLICITAR TREINAMENTO a sua mensagem será enviada para um dos instrutores que poderá auxiliá-lo.
            <br>
            <hr>
            <h3>5ª Cláusula</h3>
            <hr>
            <h4>Plano de Carreira</h4>
                <p>1º§ - Todos os pilotos estão sob esta cláusula, inclusive os pilotos que possuem cargo administrativo na V.A.. <br>
				2º§ - Os pilotos que se registrarem na Aviancav, iniciarão sua carreira como Co-Piloto Nacional. <br>
				3º§ - Caso o piloto possua as horas de voos e checks necessários à próxima patente e se for da vontade do mesmo, este estará sendo classificado à nova patente.<br>
                4º§ - Para COMANDANTE NACIONAL e COMANDANTE INTERNACIONAL é necessário passar por um exame de check prático, e também ter sido aprovado nas Provas de Regulamento de Trafego aérea IFR e Meteorologia, ambas deverão ter aproveitamento de 85% (Prova comprada pelo Piloto) no qual será solicitado através de Intra Mail para o departamento de instrução.<br>
                  5º§ - A patente de Instrutor é considerado cargo administrativo e só será concedido pelos High-Staffs.</b> <br>
                6º§ - A Avianca Virtual possui um plano de carreira onde classificará os pilotos em 5 (cinco) classes. </p>
            <br>
            <hr>
            <h3>6ª Cláusula</h3>
            <hr>
             <h4>Regulamento e Hierarquia</h4>
                <p>1º§ - Este Regulamento poderá ser alterado sem prévio aviso, porém em caso de alterações, deverá ser lançada um NOTAM no sistema, comunicando todos os pilotos sobre as alterações realizadas.<br>
				2º§ - Qualquer alteração deverá ser acompanhada por uma reunião em que esteja presente mais da metade dos staffs dos setores em que haverão alterações e as alterações, aprovadas pelos mesmos.<br>
				3º§ - O cargo da presidência é o mais hierarquio, podendo este e tão somente realizarem as alterações oficiais.<br>
				4º§ - Em caso de quebra deste regulamento, o piloto será retirado do quadro de pilotos.<br>
				5º§ - Este regulamento só possui a finalidade de manter a ordem dentro da VA.<br>
				6º§ - A Avianca Virtual, não possui qualquer vínculos com a <b class="cor">AVIANCA AIRLINES S/A</b>. Somos apenas um Fã-Clube.<br>
				</p>
                <hr>
                <div class="pull-right"><h2>Sem Mais, Staff <span class="cor">Avianca Virtual</span></h2></div>    
				</div>          
             
        </div>
        <!-- End row -->

      </div>
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
