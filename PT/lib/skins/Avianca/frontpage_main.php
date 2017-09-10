    <!-- Sequence Modern Slider -->
    <div id="da-slider" class="da-slider">

            <div class="da-slide">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
              <h2>
                <i>Bem-Vindo a Avianca Virtual!</i>
                <br>
                <i>Bienvenido a Avianca Virtual!</i>
                <br>
                <i>Welcome to Avianca Virtual!</i>
              </h2>
              <p>
                <i>Não temos qualquer vinculo com a Avianca Linhas Aéreas S/A.</i>
                <br />
                <i>Somos apenas um Fã-Clube!</i>
              </p>
              <div class="da-img">
                <!-- <img src="<?php echo SITE_URL?>/lib/skins/avianca/img/parallax-slider/images/2.png" alt="image01" /> -->
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              Bem Vindo a <b class="cor">Avianca Virtual</b>
            </h1>

          </div>
          <!--feature end-->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row mar-b-60">
        <div class="col-lg-6">
          <!--tab start-->
          <section class="tab wow fadeInLeft">
            <header class="panel-heading tab-bg-dark-navy-blue">
              <ul class="nav nav-tabs nav-justified">
                <li class="active">
                  <a data-toggle="tab" href="#news">
                    Noticias
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#events">
                    Ultimos Voos
                  </a>
                </li>
                <li class="">
                  <a data-toggle="tab" href="#notice-board">
                    Novos Pilotos
                  </a>
                </li>
              </ul>
            </header>
            <div class="panel-body">
              <div class="tab-content tasi-tab">
                <div id="news" class="tab-pane fade in active">
                  <article class="media">
                    <div class="media-body b-btm">
                      <?php MainController::Run('News', 'ShowNewsFront', 5); ?>
                    </div>
                  </article>
                </div>
                <div id="events" class="tab-pane fade">
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                        <?php MainController::Run('PIREPS', 'RecentFrontPage', 5); ?>
                    </div>
                  </article>
                </div>
                <div id="notice-board" class="tab-pane fade">
                <?php MainController::Run('Pilots', 'RecentFrontPage', 10); ?>
                </div>
              </div>
            </div>
          </section>
          <!--tab end-->
        </div>
        <div class="col-lg-6">
          <!--testimonial start-->
          <div class="about-testimonial boxed-style about-flexslider ">
            <section class="slider wow fadeInRight">
              <div class="flexslider">
                <ul class="slides about-flex-slides">
                  <li>
                    <div class="about-testimonial-image ">
                      <img alt="" src="<?php echo SITE_URL?>/lib/skins/Avianca/img/team/CEO.jpg">
                    </div>
                    <a class="about-testimonial-author" href="#">
                      Arthur Hetem
                    </a>
                    <span class="about-testimonial-company">
                      CEO - Chief Executive Officer
                    </span>
                    <div class="about-testimonial-content">
                      <p class="about-testimonial-quote">
                        É mais do que voar, é voar com respeito, paixão e amigos, Não é apenas uma empresa virtual mais sim uma familia.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="about-testimonial-image ">
                      <img alt="" src="<?php echo SITE_URL?>/lib/skins/Avianca/img/team/VP.jpg">
                    </div>
                    <a class="about-testimonial-author" href="#">
                      Juan Ceschini
                    </a>
                    <span class="about-testimonial-company">
                      Vice-Presidente
                    </span>
                    <div class="about-testimonial-content">
                      <p class="about-testimonial-quote">
                        Simular faz parte da rotina de qualquer piloto, simular com alto nível de realismo é uma forma de desenvolver cada vez mais nossas habilidades algo imprescindível para um bom piloto.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </section>
          </div>
          <!--testimonial end-->
        </div>
        </div>
      </div>
	  
    <div id="home-services">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              Realismo para a sua simulação é aqui!
            </h2>
          </div>

          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-plane">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  Navegação SITA
                </h3>
                <p>
                  A Navegação SITA é uma navegação que tem como finalidade ajudar o piloto em sua própria navegação assim como no controle de combustivel tal como ZFW TOW TFW TPW MTOW etc.
                  <br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-gears">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  LoadSheet
                </h3>
                <p>
                  É a preparação utilizada para cada voo, como peso e distribuição de carga no compartimento e muito mais.
                  <br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-qrcode">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  Briefing
                </h3>
                <p>
                  Briefing apresenta ao piloto todas as informações necessárias para o voo, tais como os NOTAMS dos aerodromos a serem usados no voo e todas as cartas atualizadas no mesmo local e muito mais...
                  <br>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
        <div class="row">
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-sitemap">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  Weather Briefing
                </h3>
                <p>
                  Destina-se como uma ferramenta para ajudar os pilotos a visualizarem melhor o tempo e riscos relacionados ao clima sobre os aeródromos para o voo.
                  <br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-image">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  Central de Exames
                </h3>
                <p>
                  <!-- A Central de Exames é um ambiente direcionado ao aprendizado de nossos pilotos, os exames poderão ser comprados com o salário virtual, e algumas patentes necessitam dessas certificações aprovadas. -->
				  Em Breve...
                  <br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-server">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  SOP AviancaV
                </h3>
                <p>
                  STANDARD OPERATING PROCEDURES integra o Manual Geral de Operações que é um conjunto de documentos e guias operacionais a ser seguido pelos tripulantes para que a Avianca Virtual alcance o nível máximo de qualidade operacional possível.
                  <br>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->

      </div>
      <!-- /container -->

    </div>
    <!-- service end -->
    <div class="hr">
      <span class="hr-inner"></span>
    </div>

    <div class="container">
      <div class="row mar-b-50 our-clients">
        <div class="col-md-3">
          <h2>
            Nossos Parceiros
          </h2>
          <p>
            Parceiros que colaboram com a Avianca Virtual.
          </p>
        </div>
        <div class="col-md-9">
          <div class="outside">
            <p>
              <span id="slider-prev">
              </span>
              |
              <span id="slider-next">
              </span>
            </p>
          </div>

          <ul class="bxslider1 clients-list">
            <li>
              <a href="http://vatsim.net">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/vatsim2.png" alt="" />

                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/vatsim.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/graylogo6.png" alt="" />

                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/graylogo6.png" alt="" />

                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/graylogo6.png" alt="" />

                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/graylogo6.png" alt="" />

                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/graylogo6.png" alt="" />

                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo SITE_URL?>/lib/skins/Avianca/img/clients/graylogo6.png" alt="" />

                <img src="i<?php echo SITE_URL?>/lib/skins/Avianca/mg/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>

          </ul>


        </div>
      </div>
      <!-- END CLIENTS -->
    </div>