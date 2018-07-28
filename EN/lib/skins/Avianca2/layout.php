<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Avianca Virtual</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/avianca/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/respond.min.js"></script>
	<![endif]-->

	<style>
	.dividir {
  border-right: 1px solid #fff;
}
</style>
	</head>

  <body>
  <?php echo $page_htmlreq; ?>
  <div class="gtco-loader"></div>
	
	<div id="page">
<?php Template::Show('app_top.php'); ?>

    <?php echo $page_content; ?>

<?php Template::Show('app_bottom.php'); ?>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/avianca/js/main.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
  </body>
</html>