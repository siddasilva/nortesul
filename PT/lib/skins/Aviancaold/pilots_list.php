    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             Tripulantes
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
	          if(!$allpilots) {
		        echo 'Sem Pilotos!';
		        return;
	          }
			  ?>
      <table id="tabledlist" class="table table-striped">
            <thead>
              <tr>
	           <th class="quadro roxo" width="16%">Mátricula</th>
	           <th class="quadro roxo" width="20%">Nome</th>
	           <th class="quadro roxo" width="20%">País</th>
	           <th class="quadro roxo" width="16%">Horas</th>
               <th class="quadro roxo" width="16%">Ranking</th>
			   <th class="quadro roxo" width="10%">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               foreach($allpilots as $pilot){
             ?>  
              <tr>
	           <td><?php echo PilotData::GetPilotCode($pilot->code, $pilot->pilotid)?></td>
	           <td><?php echo $pilot->firstname.' '.$pilot->lastname?></td>
              <td><img src="<?php echo Countries::getCountryImage($pilot->location);?>" alt="<?php echo Countries::getCountryName($pilot->location);?>" /></td>
              <td><?php echo Util::AddTime($pilot->totalhours, $pilot->transferhours); ?></td>
              <td><img src="<?php echo $pilot->rankimage?>" alt="<?php echo $pilot->rank;?>" width="80px" height="30px"/></td>
			  <td><?php
               if($pilot->retired == '1')
               {echo '<img src="'.SITE_URL.'/lib/skins/avianca/img/farol.png" alt="Inativo" />';}
               else
               {echo '<img src="'.SITE_URL.'/lib/skins/avianca/img/farol.gif" alt="Ativo" />';}
           ?></td>
             <?php
              }
              ?>
              </tr>
           </tbody>
           </table>
      <!-- End container -->
    </div>