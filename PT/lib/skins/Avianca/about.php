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