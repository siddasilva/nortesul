    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             Awards
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
	<th class="quadro roxo">Award</th>
    <th class="quadro roxo">Descrição</th>
	<th class="quadro roxo">Imagem</th>
	</tr>
</thead>
<tbody>
<?php
foreach($awards as $aw)
{
?>
<tr id="row<?php echo $aw->awardid;?>">
	<td align="center"><?php echo $aw->name; ?></td>
    <td align="center"><?php echo $aw->descrip; ?></td>

	<td align="center"><img src="<?php echo $aw->image; ?>" /></td>
	
	</tr>
<?php
}
?>
</tbody>
</table>
      <!-- End container -->
    </div>