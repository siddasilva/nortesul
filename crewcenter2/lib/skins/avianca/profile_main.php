	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<h1 class="page-title">Bem Vindo, <?php echo $userinfo->firstname ?><p><small>Seu HUB é: <span class="badge badge-roundless badge-info"><?php echo $userinfo->hub?></span></small></p></h1>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-user"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $pilotcode; ?>
							</div>
							<div class="desc">
								 <?php echo Auth::$userinfo->rank;?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-thunderbird">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $pilot->totalflights; ?>
							</div>
							<div class="desc">
								Voos
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-jungle">
						<div class="visual">
							<i class="fa fa-plane"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $pilot->totalhours; ?>
							</div>
							<div class="desc">
								 Horas Voadas
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-seance">
						<div class="visual">
							<i class="fa fa-money"></i>
						</div>
						<div class="details">
							<div class="number">
								 R<?php echo FinanceData::formatMoney((floatval($pilot->totalpay) + floatval($pilot->payadjust))) ?>
							</div>
							<div class="desc">
								 Dinheiro
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-bar-chart font-green-sharp hide"></i>
								<span class="caption-subject font-blue bold uppercase">NOTAMs</span>
								<span class="caption-helper">NOTICES TO AIRMEN</span>
							</div>
						</div>
						<div class="portlet-body">
							<?php MainController::Run('Notam', 'MostraNotam', 5); ?>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-4 col-sm-6">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-share font-blue hide"></i>
								<span class="caption-subject font-blue bold uppercase">Medalhas</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<?php
                    if(!$allawards)
                    {
                      echo '<h4 align="center"><span class="label label-danger">Sem Medalhas Ainda!</span></h4>';
                    }
                    else
                    {                              
                                                        
                  ?>
                  <ul>
                    <?php foreach($allawards as $award){ ?>
                    <li><?php echo $award->name ?><img src="<?php echo $award->image?>" alt="<?php echo $award->descrip?>" /></li>
                  </ul>  
                  <?php } ?>
                  <?php } ?>
							</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-equalizer font-blue hide"></i>
								<span class="caption-subject font-blue bold uppercase">Noticias</span>
							</div>
						</div>
						<div class="portlet-body">
							<div class="row">
							   <div class="panel-group accordion" id="accordion1">
							   <?php MainController::Run('News', 'ShowNewsFront', 5); ?>
							   </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-cursor font-blue hide"></i>
								<span class="caption-subject font-blue bold uppercase">Status do Sistema</span>
							</div>
						</div>
						<div class="portlet-body">
							<div class="row">
								<div class="col-md-4">
									<div class="easy-pie-chart">
										<div class="number transactions" data-percent="100">
											<span>
											100 </span>
											%
										</div>
										SITE <i class="icon-arrow-right"></i>
									</div>
								</div>
								<div class="margin-bottom-10 visible-sm">
								</div>
								<div class="col-md-4">
									<div class="easy-pie-chart">
										<div class="number visits" data-percent="20">
											<span>
											20 </span>
											%
										</div>
										D.O.V <i class="icon-arrow-right"></i>
									</div>
								</div>
								<div class="margin-bottom-10 visible-sm">
								</div>
								<div class="col-md-4">
									<div class="easy-pie-chart">
										<div class="number bounce" data-percent="5">
											<span>
											5 </span>
											%
										</div>
										Sistema <i class="icon-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="col-md-8">
					<!-- BEGIN CONDENSED TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject font-blue bold uppercase">CANAIS DE COMUNICAÇÃO</span>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-bordered table-condensed table-hover">
								<thead>
								<tr>
									<th>
										 Plataforma
									</th>
									<th>
										 Link para entrar
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 <i class="fa fa-whatsapp"></i> Whatsapp
									</td>
									<td>
									  <span class="badge badge-roundless badge-info">Em breve</span
									</td>
								</tr>
								<tr>
									<td>
										 <i class="fa fa-mobile"></i> Teamspeak
									</td>
									<td>
									  <span class="badge badge-roundless badge-info">Em breve</span 
									</td>
								</tr>
								<tr>
									<td>
										 <i class="fa fa-comments"></i> Fórum
									</td>
									<td>
									  <span class="badge badge-roundless badge-info">Em breve</span 
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END CONDENSED TABLE PORTLET-->
				</div>
				<div class="col-md-4 col-sm-6">
					<!-- BEGIN REGIONAL STATS PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject font-blue bold uppercase">Novos Pilotos</span>
							</div>
						</div>
						<div class="portlet-body">
                          <?php MainController::Run('Pilots', 'RecentFrontPage', 5); ?>
						</div>
					</div>
					<!-- END REGIONAL STATS PORTLET-->
				</div>
			</div>
			<div class="clearfix">
			</div>
			</div>
			</div>