	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
                   <h2>Voos Charter</h2>
                       <form id="form" action="<?php echo url('/schedules/view');?>" method="post">

<div id="tabcontainer">
	<ul>

		<li><a href="#depapttab"><span>Por Aeroporto de Partida</span></a></li>
		<li><a href="#arrapttab"><span>Por Aeroporto de Chegada</span></a></li>
		<li><a href="#airlinetab"><span>Por Cia Aerea</span></a></li>
                <li><a href="#aircrafttab"><span>Por Aeronave</span></a></li>
		<li><a href="#distance"><span>Por Distancía</span></a></li>
	</ul>
	<div id="depapttab">
		<p>Selecione Seu Aeroporto de Partida:</p>
		<select id="depicao" name="depicao">
		<option value="">Selecionar Todos</option>
		<?php
		if(!$depairports) $depairports = array();

		foreach($depairports as $airport) {
			echo '<option value="'.$airport->icao.'">'.$airport->icao
					.' ('.$airport->name.')</option>';
		}
		?>

		</select>
		<input type="submit" name="submit" value="Encontrar Voos" />
	</div>
	<div id="arrapttab">
		<p>Selecione Seu Aeroporto de Chegada:</p>
		<select id="arricao" name="arricao">
			<option value="">Selecionar Todos</option>
		<?php
		if(!$depairports) $depairports = array();

		foreach($depairports as $airport) {
			echo '<option value="'.$airport->icao.'">'.$airport->icao
					.' ('.$airport->name.')</option>';
		}
		?>

		</select>
		<input type="submit" name="submit" value="Encontrar Voos" />
	</div>
	<div id="aircrafttab">
		<p>Selecionar Aeronave:</p>
		<select id="equipment" name="equipment">
			<option value="">Selecionar Todos</option>
		<?php
		if(!$aircraft_list) {
            $aircraft_list = array();
		}

		foreach($aircraft_list as $aircraft) {
			echo '<option value="'.$aircraft->name.'">'.$aircraft->name.'</option>';
		}

		?>
		</select>
		<input type="submit" name="submit" value="Encontrar Voos" />
	</div>
    <div id="airlinetab">
        <p>Selecionar Cia Aérea</p>
        <select id="airlines" name="airlines">
        <option value="">Selecionar Todos</option>
        <?php
        if(!$airlines) $airlines = array();
        foreach ($airlines as $airline) {
            echo '<option value="'.$airline->code.'">'.$airline->name.'</option>';
        }
        ?>

        </select>

        <input type="submit" name="submit" value="Encontrar Voos" />
    </div>
	<div id="distance">
		<p>Selecionar Distancía:</p>
		<select id="type" name="type">
			<option value="greater">Maior que</option>
			<option value="less">Menor que</option>
		</select>
		<input type="text" name="distance" value="" />
		<input type="submit" name="submit" value="Encontrar Voos" />
	</div>
</div>

<p>
<input type="hidden" name="action" value="findflight" />
</p>
</form>
		        
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<script type="text/javascript">

</script>