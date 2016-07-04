<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title>MACROPOR Blog</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tradokey Blog">
    <meta name="author" content="Tradokey">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/custom-icons/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

     <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-80040237-1', 'auto');
          ga('send', 'pageview');

      </script>

      <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '299795150354648',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head> 

  <body class="features-page">    
   <!-- ******HEADER****** --> 
  <!-- ******HEADER****** --> 
                <header id="header" class="header">  
                    <div id="topbar" class="topbar">
                        <div class="container-fluid">
                            <nav class="main-nav" role="navigation">
                                <div class="navbar-header text-center">
                                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                                        <span class="icon-bar-wrapper">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </span><!--//icon-bar-wrapper-->
                                    </button><!--//nav-toggle-->
                                </div><!--//navbar-header-->
                                <div id="navbar-collapse" class="navbar-collapse collapse text-center">
                                    <ul class="nav navbar-nav center-block">
                                        <li class="nav-item active"><a  href="../">Regresar al Inicio</a></li>
                                       
                                    </ul><!--//nav-->
                                </div><!--//navabr-collapse-->
                            </nav><!--//main-nav-->
                            <div class="social-container">
                                <ul class="list-inline social-list">
                                    <li class="social-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="social-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul><!--//social-list-->
                            </div><!--//social-container-->
                        </div><!--//container-->
                    </div><!--//topbar-->
                    <div class="branding container">    
                        <h1 class="logo pull-left"><img id="logo-image" class="logo-image" src="wp-content/themes/theme_camoranns/assets/images/logotipo_icopor.png" alt=""></h1> 
                        <div class="help-box text-right">
        
                <h3>2694134 -  3206740586<img width="24px" class="alignright" src="/assets/images/icono_wp.png" alt=""><br> 3152532734</h3><br>
                <h4>info@macropor.com</h4>

            </div>
                    </div><!--//branding-->
                </header><!--//header-->

  

<div class="headline-bg">
</div><!--//headline-bg-->         

<!-- ******Video Section****** --> 
<section class="features-video section section-on-bg">  
    <div class="container " >

       <!--  <div class="blog-entry-content col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">   --> 

       <h1 class="text-center crms-title title-blog">Noticias Macropor</h1>

       <div id="blog-mansonry" class="blog-list">

        <?php
        if ( have_posts() ) :

            while ( have_posts() ) : the_post();

        get_template_part( 'loop', get_post_format() );

        endwhile;

        else :

            get_template_part( 'loop', 'empty' );

        endif;
        ?>

    </div><!--//blog-list-->  



</div>




<!-- </div>//video-container--> 
</div><!--//container-->
</section><!--//feature-video-->


  <!-- ******FOOTER****** --> 
                        <footer class="footer">
                            <div class="footer-main container">
                                <div class="row">
                                    <div class="footer-col business-hours-col col-md-4 col-sm-6 col-xs-12">
                                        <h3 class="col-title">Horario de Atención</h3>
                                        <div class="intro">Nuestros Horarios de oficina y de<br>respuesta inmediata.</div>
                                        <ul class="business-hours-list list-unstyled">
                                            <li><strong>Lunes - Viernes:</strong> 7:30am - 5:30pm</li>
                                            <li><strong>Sabado:</strong> 7:30am - 12pm</li>                                           </ul>
                                        </div><!--//footer-col-->
                                        <div class="footer-col contact-us-col col-md-4 col-sm-6 col-xs-12">
                                            <h3 class="col-title">Información de Contacto</h3>
                                            <ul class="footer-contact-list list-unstyled">
                                                <li class="item">
                                                    <span class="custom-icon icon-telephone_signal"></span>
                                                    <span class="info"><a href="#">269 4134 </a></span>
                                                </li>
                                                <li class="item">
                                                    <span class="custom-icon icon-mobile-phone"></span>
                                                    <span class="info"><i class="icon-whatsapp"></i> <a href="#">3206740586 -
3152532734</a></span>
                                                </li>
                                                <li class="item">
                                                    <span class="custom-icon icon-email"></span>
                                                    <span class="info"><a href="#">info@macropor.com</a></span>
                                                </li>    
                                                <li class="item">
                                                    <span class="custom-icon icon-map_pin"></span>
                                                    <span class="info">


                                                        <span class="street-address"><b>Ubicación</b></span><br>
                                                        <span class="region">Calle 24 N0. 14-06 - Piso 2</span><br>
                                                        <span class="postal-code">Jamundi 
                                                            Cali, Valle del Cauca   </span><br>
                                                            <span class="country-name">Colombia</span>

                                                        </span>
                                                    </li>    
                                                </ul>
                                            </div><!--//footer-col-->
                                            <div class="footer-col follow-us-col col-md-4 col-xs-12">
                                                <h3 class="col-title">Síguenos</h3>
                                                <div class="intro">Síguenos en nuestras redes y entérate de nuestro excelente trabajo.</div>
                                                <div class="social-container">
                                                    <ul class="list-inline social-list">
                                                        <li class="social-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li class="social-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        <li class="social-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li class="social-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul><!--//social-list-->
                                                </div><!--//social-container-->

                                            </div><!--//footer-col-->
                                        </div><!--//row-->



                                    </div><!--//container-->
                                    <div class="bottombar text-center">


                                        <div class="copyright"><b>MACROPOR</b> Induyorjac S.A.S <a href="http://themes.3rdwavemedia.com/" target="_blank"> - Todos los derechos reservados</a></div>  

                                    </div><!--//bottombar--> 
                                </footer><!--//footer-->


<!-- Javascript -->          
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/FitVids/jquery.fitvids.js"></script>  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<!-- blog page specific js starts --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>     
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/masonry.pkgd.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/blog.js"></script>
<!-- blog page specific js ends -->  


</body>

</html> 

