<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title>MACROPOR Blog</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head> 

  <body class="features-page">    
   <!-- ******HEADER****** --> 


  

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
   <!-- ******FOOTER****** --> 
                            <footer class="footer">
                                <div class="footer-main container">
                                    <div class="row">
                                        <div class="footer-col business-hours-col col-md-4 col-sm-6 col-xs-12">
                                            <h3 class="col-title">Horario de Atención</h3>
                                            <div class="intro">Nuestros Horarios de oficina y de<br>respuesta inmediata.</div>
                                            <ul class="business-hours-list list-unstyled">
                                                <li><strong>Lunes - Viernes:</strong> 8am - 6pm</li>
                                                <li><strong>Sabado:</strong> 8am - 4pm</li>
                                                <li><strong>Domingo:</strong> 9am - 1pm</li>
                                            </ul>
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
                                                    <span class="info"><a href="#">320 6740586</a></span>
                                                </li>
                                                <li class="item">
                                                    <span class="custom-icon icon-email"></span>
                                                    <span class="info"><a href="#">info@macropor.com</a></span>
                                                </li>    
                                                <li class="item">
                                                    <span class="custom-icon icon-map_pin"></span>
                                                    <span class="info">


                                                        <span class="street-address"><b>Ubicación</b></span><br>
                                                        <span class="region">Calle 24 N0. 14-06</span><br>
                                                        <span class="postal-code">Jamundi 
                                                            Cali, Valle del Cauca   </span><br>
                                                            <span class="country-name">Colombia</span>

                                                        </span>
                                                    </li>    
                                                </ul>
                                            </div><!--//footer-col-->
                                            <div class="footer-col follow-us-col col-md-4 col-xs-12">
                                                <h3 class="col-title">Síguenos</h3>
                                                <div class="intro">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</div>
                                                <div class="social-container">
                                                    <ul class="list-inline social-list">
                                                        <li class="social-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li class="social-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li class="social-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li class="social-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul><!--//social-list-->
                                                </div><!--//social-container-->

                                                <ul class="footer-menu list-unstyled">
                                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                </ul>
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
