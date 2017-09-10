    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             Plano de Carreira
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
       <table id="tabledlist" class="table table-striped">
<thead>
<tr>
	<th class="quadro roxo">Nome do Cargo</th>
    <th class="quadro roxo">Minimo de Horas</th>
	<th class="quadro roxo">Berimbela</th>
	</tr>
</thead>
<tbody>
<?php
foreach($ranks as $rank)
{
?>
<tr id="row<?php echo $rank->rankid;?>">
	<td align="center"><?php echo $rank->rank; ?></td>
    <td align="center"><?php echo $rank->minhours; ?></td>

	<td align="center"><img src="<?php echo $rank->rankimage; ?>" /></td>
	
	</tr>
<?php
}
?>
</tbody>
</table>
      <!-- End container -->
    </div>