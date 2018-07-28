<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="icon" href="<?php echo SITE_URL?>/lib/skins/avianca/img/favicon.ico" type="image/x-icon"/>

    <title> Welcome - AirGo</title>
     <?php echo $page_htmlhead; ?>
	 
    <!-- Bootstrap core CSS -->
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/css/theme.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/avianca/css/flexslider.css"/>
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/avianca/css/animate.css">
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/avianca/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo SITE_URL?>/lib/skins/avianca/assets/owlcarousel/owl.theme.css">

    <link href="<?php echo SITE_URL?>/lib/skins/avianca/css/superfish.css" rel="stylesheet" media="screen">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/lib/skins/avianca/css/component.css">
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/css/style.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/style.css" rel="stylesheet">
    <link href="<?php echo SITE_URL?>/lib/skins/avianca/css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL?>/lib/skins/avianca/css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/avianca/js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/html5shiv.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/respond.min.js">
    </script>
    <![endif]-->
  </head>

  <body>
  <?php echo $page_htmlreq; ?>
<?php Template::Show('app_top.php'); ?>

    <?php echo $page_content; ?>

<?php Template::Show('app_bottom.php'); ?>
    <!-- js placed at the end of the document so the pages load faster
<script src="<?php echo SITE_URL?>/lib/skins/avianca/js/jquery.js">
</script>
-->
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/jquery-1.8.3.min.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/avianca/js/hover-dropdown.js">
    </script>
    <script defer src="<?php echo SITE_URL?>/lib/skins/avianca/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/avianca/assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/avianca/js/jquery.parallax-1.1.3.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/wow.min.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/jquery.easing.min.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/link-hover.js">
    </script>
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/superfish.js">
    </script>
    <script type="text/javascript" src="<?php echo SITE_URL?>/lib/skins/avianca/js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="<?php echo SITE_URL?>/lib/skins/avianca/js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 3,
          maxSlides: 5,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Proximo →',
          prevText: '← Voltar'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>
  </body>
</html>