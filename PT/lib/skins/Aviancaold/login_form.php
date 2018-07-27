<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/lib/skins/Avianca/login/login.css">
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/lib/skins/Avianca/login/animate.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="icon" href="<?php echo SITE_URL?>/lib/skins/Avianca/img/favicon.ico" type="image/x-icon"/>
<style>
body { overflow: hidden; background-image:login/bg-login-2.jpg; }
#box{
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	z-index:-1;
}
.texto2{
	text-decoration:none;
	color:#DA0808;
	font-family:'Oswald';
	font-size:80%;
	margin-left:32%;
	margin-top:10px;
}
.texto2:hover{
	color:#ED1651;
	}
</style>
</head>

<body ondragstart="return false" onselectstart="return false">
<div id="box"><img src="<?php echo SITE_URL?>/lib/skins/Avianca/login/bg-login-2.jpg" width="100%" height="100%" /></div>
  <div id="login" class="bradius animated bounceIn">
     <div class="message"></div>
     <div class="logo animated zoomin" align="center"><img src="<?php echo SITE_URL?>/lib/skins/Avianca/login/logo.png"></div>
     <h1></h1>
     <div class="acomodar">
     <form name="loginform" action="<?php echo url('login');?>" method="post">
     <label class="textos">MATRICULA</label><input type="text" name="email" class="txt bradius" value="ONE" maxlength="6" />
     <label class="textos">SENHA</label><input type="password" name="password"class="txt bradius" value=""  placeholder="Senha"/>
     <input type="hidden" name="redir" value="index.php/profile" />
	 <input type="hidden" name="action" value="login" />
     <input type="submit"  class="sb bradius" value="Log in" />
     </form>
     <!--acomodar-->
     </div>
     <a href="<?php echo url('Login/forgotpassword'); ?>" class="texto2">Esqueceu sua senha?</a>
     <!--login-->
  </div>
</body>
</html>
