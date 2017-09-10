    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             Nossa Frota
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
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Max Cargo</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php if($aircrafts != null){ foreach($aircrafts as $aircrafts){ ?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
	         <td><?php echo $aircrafts->maxcargo; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">View&raquo;</button></a></td> 
		    </tr>
	        <?php } }?>
	       </tbody>
          </table>
      <!-- End container -->
    </div>    