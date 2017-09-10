    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             DESTINOS
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="pull-right">
              <h1 class="pequeno">AIRGO</h1>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container" id="tourpackages-carousel">
      <table id="tabledlist" class="table table-striped">
            <thead>  
              <tr>
                <td class="quadro roxo">ICAO</td>
                <td class="quadro roxo">Nome do Aeroporto</td>
                <td class="quadro roxo">País</td>
              </tr>
            </thead>
            <tbody>
             <?php $allairports = OperationsData::GetAllAirports(); ?>
                  
             <?php foreach ($allairports as $airport) 
              {
              ?>
             <tr>
               <td><?php echo $airport->icao; ?> </td>
               <td><?php echo $airport->name; ?> </td>
               <td><?php echo $airport->country; ?> </td>
             </tr>
             <?php } ?>
            </tbody>
          </table>
      <!-- End container -->
    </div>