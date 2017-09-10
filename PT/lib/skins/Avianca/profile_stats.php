<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Despacho Operacional | Minhas Estatisticas</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/Avianca/Painel/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/Avianca/Painel/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen sthe skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/Avianca/Painel/dist/css/skins/skin-avianca.min.css">
    <link rel="icon" href="<?php echo SITE_URL?>/lib/skins/Avianca/img/favicon.ico" type="image/x-icon"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
  .widget{
	 background-color:#2a0088; 
	 color:#ed1651;
	 height:80px;
	 width:80px;
   }
   .widget:hover{
	 background-color:#ed1651; 
	 color:#FFF;
	 border:1px solid #ed1651;
	 transition-property:background-color color border;
	 transition-duration:0.5s;
	 transition-timing-function:ease-out;
	 transition-delay: 0.1s;
   }
   .cor{
	 color:#2a0088;
   }
   .roxo{
	background-color:#2a0088;
	color:#ed1651;
   }
   .quadro{
	border:1px solid #D9DCD7;
   }
  </style>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-red sidebar-mini" >
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
           <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>O</b>N<b>E</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Avianca</b>Virtual</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="messages-menu">
                <!-- Menu toggle button -->
                <a href="#">
                  <i class="fa fa-envelope-o"></i>
                    <span class="label label-success"><?php MainController::Run('Mail', 'checkmail'); ?></span>
                 </a>
              </li><!-- /.messages-menu -->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?> - <?php echo Auth::$userinfo->rank;?>
                      <small>Membro Desde <?php echo date(DATE_FORMAT, strtotime($userinfo->joindate));?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <?php echo Auth::$userinfo->totalflights?> Voos
                    </div>
                    <div class="col-xs-4 text-center">
                      <?php echo Auth::$userinfo->totalhours;?> Horas
                    </div>
                    <div class="col-xs-4 text-center">
                      <?php echo Auth::$userinfo->hub?>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></p>
              <!-- Status -->
              <i class="fa fa-circle text-success"></i> Conectado
            </div>
          </div>


          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?php echo SITE_URL?>/index.php/profile"><i class="fa fa-home"></i> <span>Despacho Operacional</span></a></li>
            <li class="active"><a href="<?php echo SITE_URL?>/index.php/profile/stats"><i class="fa fa-line-chart"></i> Minhas Estatísticas</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-plane"></i> <span>Despacho de Voos</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo url('/RandomFlights'); ?>">Gerar Escala</a></li>
                <li><a href="<?php echo SITE_URL?>/index.php/pireps/mine">Logbook</a></li>
              </ul>
            </li>
            <li><a href="<?php echo SITE_URL?>/index.php/downloads"><i class="fa fa-download"></i> <span>Downloads</span></a></li>
            <li><a href="#"><i class="fa fa-graduation-cap"></i> <span>Academia avianca</span></a></li>
            <?php
              if(Auth::LoggedIn() && PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
              {
                echo '<li><a href="'.fileurl('/admin').'"><i class="fa fa-terminal"></i> <span>Administrar</span></a></li>';
              }
            ?>
			<li><a href="<?php echo SITE_URL?>/index.php"><i class="fa fa-undo"></i> <span>Voltar ao Site</span></a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/logout"><i class="fa fa-unlock"></i> <span>Encerrar Sessão</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Minhas Estatisticas
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php
/*
	Added in 2.0!
*/
$chart_width = '800';
$chart_height = '250';

/* Don't need to change anything below this here */
?>
<div align="center" style="width: 100%;">
	<div align="center" id="months_data"></div>
</div>
<br />
<div align="center" style="width: 100%;">
	<div align="center" id="aircraft_data"></div>
</div>

<script type="text/javascript" src="<?php echo fileurl('/lib/js/ofc/js/swfobject.js')?>"></script>
<script type="text/javascript">
swfobject.embedSWF("<?php echo fileurl('/lib/js/ofc/open-flash-chart.swf');?>", 
	"months_data", "<?php echo $chart_width;?>", "<?php echo $chart_height;?>", 
	"9.0.0", "expressInstall.swf", 
	{"data-file":"<?php echo actionurl('/pilots/statsmonthsdata/'.$pilot->pilotid);?>"});
	
	
<?php
$chart_width = '800';
$chart_height = '300';

/* Don't need to change anything below this here */
?>
swfobject.embedSWF("<?php echo fileurl('/lib/js/ofc/open-flash-chart.swf');?>", 
	"aircraft_data", "<?php echo $chart_width;?>", "<?php echo $chart_height;?>", 
	"9.0.0", "expressInstall.swf", 
	{"data-file":"<?php echo actionurl('/pilots/statsaircraftdata/'.$pilot->pilotid);?>"});
</script>  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <span class="label label-sucess">Versão 1.0</span>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <?php echo date('Y')?> avianca Virtual.</strong> Todos os Direitos Reservados.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Atividades Recentes</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-aqua"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Inauguração</h4>
                    <p>Foi em 9 de Junho de 2016</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->
          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
              <h3 class="control-sidebar-heading">Informações Gerais</h3>
                <h3 class="control-sidebar-subheading">
                 Desenvolvido por <a href="https://www.facebook.com/arthur.hetem">Arthur Hetem</a>
                <p>
                  Versão 1.0, Desenvolvido em São Paulo
                </p>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/Painel/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/Painel/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo SITE_URL?>/lib/skins/Avianca/Painel/dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
