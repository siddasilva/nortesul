<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo SITE_URL?>/index.php">
			<img src="<?php echo SITE_URL?>/lib/skins/avianca/assets/admin/layout/img/logo.png" alt="logo" class="logo-default" width="100px" height="40px"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-envelope-open"></i>
					<span class="badge badge-default">
					<?php MainController::Run('Mail', 'checkmail'); ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>Você Tem <span class="bold"><?php MainController::Run('Mail', 'checkmail'); ?> Novas</span> Mensagens</h3>
							<a href="page_inbox.html">Ver</a>
						</li>
					</ul>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>"/>
					<span class="username username-hide-on-mobile">
					<?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?> </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?php echo SITE_URL?>/../PT/index.php">
							<i class="icon-lock"></i> Site </a>
						</li>
						<li>
							<a href="<?php echo SITE_URL?>/index.php/logout">
							<i class="icon-key"></i> Logout </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					&nbsp;
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="<?php echo SITE_URL?>/index.php/profile">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="heading">
					<h3 class="uppercase">Sistema de Voos</h3>
				</li>
				<?php
				  if($bids){
			    ?>
				<li>
					<a href="<?php echo SITE_URL?>/index.php/schedules/bids">
					<i class="icon-plane"></i>
					<span class="badge badge-roundless badge-warning"><?php echo count($bids);?></span>
					<span class="title">Escala Reservada</span>
					</a>
				</li>
				<?php
				  }
				  if(!$bids){
					  ?>
					<li>
					<a href="javascript:;">
					<i class="icon-plane"></i>
					<span class="title">Despacho de Voos</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo SITE_URL?>/index.php/randomflights">
							Gerar Escala</a>
						</li>
						<li>
							<a href="<?php echo SITE_URL?>/index.php/schedules">
							Gerar Charter</a>
						</li>
						<li>
							<a href="<?php echo SITE_URL?>/index.php/jumpseat">
							Jumpseat</a>
						</li>
					</ul>
				</li>
				<?php	
				  }  
				  ?>
				<li>
					<a href="javascript:;">
					<i class="icon-doc"></i>
					<span class="badge badge-roundless badge-warning">Em breve</span>
					<span class="title">Cartas Aéreas</span>
					</a>
				</li>
				<li class="heading">
					<h3 class="uppercase">Perfil</h3>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="badge badge-roundless badge-warning">Em breve</span>
					<span class="title">Opções do perfil</span>
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/index.php/pireps/routesmap">
					<i class="icon-notebook"></i>
					<span class="title">Logbook</span>
					</a>
				</li>
				<li class="heading">
					<h3 class="uppercase">Operacional</h3>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/index.php/acars">
					<i class="icon-map"></i>
					<span class="title">Tracking</span>
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/index.php/mail">
					<i class="icon-envelope"></i>
					<span class="badge badge-roundless badge-warning"><?php MainController::Run('Mail', 'checkmail'); ?></span>
					<span class="title">Intra-mail</span>
					</a>
				</li>
				<li>
					<a href="<?php echo url('/loa'); ?>">
					<i class="icon-user-unfollow"></i>
					<span class="title">Solicitar Afastamento</span>
					</a>
				</li>
				<li>
					<a href="<?php echo url('/downloads'); ?>">
					<i class="icon-cloud-download"></i>
					<span class="title">Downloads</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-graduation"></i>
					<span class="badge badge-roundless badge-warning">EM BREVE</span>
					<span class="title">Acadameia</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-pointer"></i>
					<span class="badge badge-roundless badge-warning">EM BREVE</span>
					<span class="title">Eventos</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-book-open"></i>
					<span class="badge badge-roundless badge-warning">EM BREVE</span>
					<span class="title">Finanças</span>
					</a>
				</li>
				<?php
              if(Auth::LoggedIn() && PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
              {
                echo '<li><a href="'.fileurl('/admin').'"><i class="icon-wrench"></i> <span class="title">Administrar</span></a></li>';
              }
            ?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->