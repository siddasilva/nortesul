<body class="page-md login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="<?php echo SITE_URL?>/lib/skins/avianca/assets/admin/layout/img/logo-white.png" alt="logo" class="logo-default" width="256px" height="144px"/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo url('/login');?>" method="post">
		<h3 class="form-title">Acessar CrewCenter</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Matrícula</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Senha</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember"/> Lembrar-me </label>
			<input type="hidden" name="redir" value="index.php/profile" />
            <input type="hidden" name="action" value="login" />
			<button type="submit" class="btn green-haze pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="forget-password">
			<h4>Esqueceu Sua Senha?</h4>
			<p>
				 Sem problemas, clique <a href="<?php echo url('login/forgotpassword'); ?>" id="forget-password">
				AQUI </a>
				para resetar sua senha.
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->