<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  


<head>
    <title>Macropor</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    







    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->   
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/custom-icons/style.css">
    <link rel="stylesheet" href="assets/plugins/animate-css/animate.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/plugins/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="assets/plugins/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">

    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-24707561-36', 'auto');
          ga('send', 'pageview');

      </script>

      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','../../../connect.facebook.net/en_US/fbevents.js');

            fbq('init', '1506230579705064');
            fbq('track', "PageView");</script>
            <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=1506230579705064&amp;ev=PageView&amp;noscript=1"
                /></noscript>
                <!-- End Facebook Pixel Code --> 

            </head> 

            <body data-spy="scroll">     

                @include('templates.header')

                <div id="promo" class="promo-section">

                    <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="8000">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
                            <li data-slide-to="1" data-target="#hero-carousel"></li>
                           {{--  <li data-slide-to="2" data-target="#hero-carousel"></li>
                            <li data-slide-to="3" data-target="#hero-carousel"></li>
                            <li data-slide-to="4" data-target="#hero-carousel"></li> --}}
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item item-1 active">
                                <div class="item-content container text-center">
                                    <div class="item-content-inner">

                                        <h2 class="heading">Innovamos con Tecnología y Calidad
                                            <br>Para Nuestros Clientes</h2>
                                            <p class="intro">
                                                Nuestro mayor interés es comprometernos <br>entregando calidad y buen servicio.
                                            </p>
                                            
                                            <a class="btn btn-primary btn-cta scrollto" href="#about" target="_blank">Conózcanos</a>

                                        </div><!--//item-content-inner-->
                                    </div><!--//item-content-->
                                </div><!--//item-->

                                <div class="item item-3">
                                    <div class="item-content container text-center">
                                        <div class="item-content-inner">

                                            <h2 class="heading">Nuestro equipo está muy atento a colaborar activamente en sus requerimientos.</h2>
                                            <p class="intro">Contamos con un equipo muy profesional para atender <br>todas las inquietudes que usted pueda tener.</p>
                                            <a class="btn btn-primary btn-cta scrollto" href="#contact" target="_blank">Contáctenos</a>

                                        </div><!--//item-content-inner-->
                                    </div>
                                </div><!--//item-->

                                {{-- <div class="item item-4">
                                    <div class="item-content container text-center">
                                        <div class="item-content-inner">

                                            <h2 class="heading">50+ Construction Icons Included</h2>
                                            <p class="intro">This template also includes a set of useful construction icon fonts. <br>You can easily pick the ones right for your site.</p>
                                            <a class="btn btn-primary btn-cta" href="#" target="_blank">Buy Now</a>

                                        </div>
                                    </div>
                                </div>

                                <div class="item item-5">
                                    <div class="item-content container text-center">
                                        <div class="item-content-inner">

                                            <h2 class="heading">Ready to build sites for trade businesses?</h2>
                                            <p class="intro">We've laid the foundations for you so you can easily make successful sites for builders, plumbers, electricians, carpenters and many more.</p>
                                            <a class="btn btn-primary btn-cta" href="#" target="_blank">Buy Now</a>

                                        </div>
                                    </div>
                                </div> --}}

                            </div><!--//carousel-inner-->

                        </div><!--//carousel-->
                    </div><!--//promo-section-->

                    <section id="services" class="section services-section text-center">
                        <div class="container">
                            <h2 class="section-title">Nuestros Servicios</h2>
                            <div class="section-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean massa. </div>
                            <div class="services-list row">
                                <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <span class="custom-icon icon-wheel_barrow"></span>
                                        <h3 class="item-title">Plastering</h3>
                                        <div class="item-desc">
                                            <p>There are 50+ construction icon fonts included in this template. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div><!--//item-desc-->
                                    </div><!--//item-inner-->
                                </div><!--//item-->
                                <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <span class="custom-icon icon-paint_brush"></span>
                                        <h3 class="item-title">Painting &amp; Decorating</h3>
                                        <div class="item-desc">
                                            <p>There are 50+ construction icon fonts included in this template. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div><!--//item-desc-->
                                    </div><!--//item-inner-->
                                </div><!--//item-->
                                <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <span class="custom-icon icon-paint_roller"></span>
                                        <h3 class="item-title">Renovation &amp; Refurb</h3>
                                        <div class="item-desc">
                                            <p>There are 50+ construction icon fonts included in this template. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div><!--//item-desc-->
                                    </div><!--//item-inner-->
                                </div><!--//item-->
                                {{-- <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <span class="custom-icon icon-digger"></span>
                                        <h3 class="item-title">Extension</h3>
                                        <div class="item-desc">
                                            <p>There are 50+ construction icon fonts included in this template. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div> --}} 
                               {{--    <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <span class="custom-icon icon-ladder"></span>
                                        <h3 class="item-title">Roofing</h3>
                                        <div class="item-desc">
                                            <p>There are 50+ construction icon fonts included in this template. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div> --}}
                             {{--    <div class="item col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <span class="custom-icon icon-ruler_pencil"></span>
                                        <h3 class="item-title">Loft Conversion</h3>
                                        <div class="item-desc">
                                            <p>There are 50+ construction icon fonts included in this template. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="cta-area">
                                <ul class="list-inline">
                                    <li><a class="btn btn-primary scrollto" href="#contact">Contáctenos</a></li>
                                    <li><a class="btn btn-secondary scrollto" href="#projects">Nuestros Productos</a></li>
                                </ul>
                            </div><!--//cta-area-->
                        </div><!--//container-->
                    </section><!--//services-->



                    <section id="reviews" class="reviews-section section  text-center">
                        <div class="container-fluid">
                            <h2 class="section-title">Casos de Éxito y Recomendaciones</h2>
                            <div id="reviews-carousel" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="inner">
                                        <blockquote class="quote">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est rem dolorum voluptatibus, doloremque eum temporibus reiciendis doloribus expedita vel beatae accusamus.</p>
                                        </blockquote>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div><!--//rating-->
                                        <div class="source">
                                            <img class="customer-profile" src="assets/images/customers/customer-1.png" alt="">
                                            <div class="customer-meta">Techos & Soportes LTDA</div>
                                        </div><!--//source-->
                                    </div><!--inner-->
                                </div><!--//item-->
                                <div class="item">
                                    <div class="inner">
                                        <blockquote class="quote">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>We are so pleased about the work! Ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa quisque rutrum.</p>
                                        </blockquote>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div><!--//rating-->
                                        <div class="source">
                                            <img class="customer-profile" src="assets/images/customers/customer-2.png" alt="">
                                            <div class="customer-meta">RAK & CIA Arquitectura</div>
                                        </div><!--//source-->
                                    </div><!--inner-->
                                </div><!--//item-->
                                <div class="item">
                                    <div class="inner">
                                        <blockquote class="quote">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est rem dolorum voluptatibus, doloremque eum temporibus reiciendis doloribus expedita vel beatae accusamus.</p>
                                        </blockquote>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div><!--//rating-->
                                        <div class="source">
                                            <img class="customer-profile" src="assets/images/customers/customer-3.png" alt="">
                                            <div class="customer-meta">Construcciones del Valle</div>
                                        </div><!--//source-->
                                    </div><!--inner-->
                                </div><!--//item-->
                                <div class="item">
                                    <div class="inner">
                                        <blockquote class="quote">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est rem dolorum voluptatibus, doloremque eum temporibus reiciendis doloribus expedita vel beatae accusamus.</p>
                                        </blockquote>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div><!--//rating-->
                                        <div class="source">
                                            <img class="customer-profile" src="assets/images/customers/customer-4.png" alt="">
                                            <div class="customer-meta">Garces Arquitectos</div>
                                        </div><!--//source-->
                                    </div><!--inner-->
                                </div><!--//item-->
                                <div class="item">
                                    <div class="inner">
                                        <blockquote class="quote">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est rem dolorum voluptatibus, doloremque eum temporibus reiciendis doloribus expedita vel beatae accusamus.</p>
                                        </blockquote>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div><!--//rating-->
                                        <div class="source">
                                            <img class="customer-profile" src="assets/images/customers/customer-5.png" alt="">
                                            <div class="customer-meta">Margarita Vargas</div>
                                        </div><!--//source-->
                                    </div><!--inner-->
                                </div><!--//item-->
                                <div class="item">
                                    <div class="inner">
                                        <blockquote class="quote">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est rem dolorum voluptatibus, doloremque eum temporibus reiciendis doloribus expedita vel beatae accusamus.</p>
                                        </blockquote>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div><!--//rating-->
                                        <div class="source">
                                            <img class="customer-profile" src="assets/images/customers/customer-6.png" alt="">
                                            <div class="customer-meta">Carlos Garcia, Bristol</div>
                                        </div><!--//source-->
                                    </div><!--inner-->
                                </div><!--//item-->
                            </div><!--//reviews-carousel-->
                        </div><!--//container-fluid-->
                    </section><!--//reviews-section-->

                    <section id="about" class="about-section section text-center">
                        <div class="container">
                            <h2 class="section-title">Nosotros</h2>
                            <div class="section-intro">
                                <p>La empresa se constituyó por escritura pública en el año 2003 con razón social INDUSTRIA
                                    METALMECANICA YORJAC LTDA, su objeto social inicial fue la fabricación y mantenimiento de
                                    maquinaria industrial. La empresa toma la decisión de instalar una planta de transformación de
                                    poliestireno expandible autoextinguible (icopor) modificando la razón social a MACROPOR
                                    INDUYORJAC SAS.
                                    Hoy por hoy contamos con el apoyo y la confianza de nuestros clientes quienes nos han
                                    permitido hacer parte de sus proyectos basados en la experiencia, calidad y cumplimiento que
                                    nos han caracterizado. 
                                </div><!--//about-desc-->
                                <figure class="about-figure">
                                    <img class="img-responsive center-block" src="assets/images/about.jpg" alt="">
                                    <br>
                                </figure>

                                <div class="col-md-6">
                                    <h4 class="section-title">Misión</h4>
                                    <p>Fabricar y comercializar  productos en E.P.S(Icopor).
                                        Satisfacer las necesidades y requerimientos de nuestros clientes de manera oportuna, permanente, con productos de calidad y precios competitivos.
                                        Conservar los recursos naturales que se puedan ver afectados por el mal manejo de los residuos sólidos en especial  el poliestireno, desarrollando así un programa de manejo seguro y disposición final adecuado, que incluye la reutilización y reciclaje de este material. 
                                    </p>
                                </div> 
                                <div class="col-md-6">
                                    <h4 class="section-title">Visión</h4>
                                    <p>Ser la compañía elegida para proveer productos en poliestireno expandible a nivel nacional, con base en la calidad de nuestros productos, el  cumplimiento y asesoría técnica,  el profesionalismo y calidad humana de nuestros colaboradores y la organización reflejada en nuestros procesos.</p>
                                </div> 
                            </div><!--//container-->
                        </section><!--//about-section-->

                        <section id="why" class="why-section section text-center">
                            <h2 class="section-title">¿Por qué elegirnos?</h2>
                            <div class="reasons center-block">
                                <div class="item">
                                    <h3 class="item-title"><i class="fa fa-check" aria-hidden="true"></i> Somos pioneros en el diseño de soluciones de icopor en la region</h3>
                                    <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui, perspiciatis dolorum minus. </div><!--//item-desc-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="item-title"><i class="fa fa-check" aria-hidden="true"></i> Tenemos un 96% de satisfacción de todos nuestros clientes.</h3>
                                    <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui, perspiciatis dolorum minus.</div><!--//item-desc-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="item-title"><i class="fa fa-check" aria-hidden="true"></i> Nuestro principal valor es la Responsabilidad</h3>
                                    <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui, perspiciatis dolorum minus.</div><!--//item-desc-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="item-title"><i class="fa fa-check" aria-hidden="true"></i> Garantizamos la calidad de nuestros productos de principio a fin</h3>
                                    <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui, perspiciatis dolorum minus.</div><!--//item-desc-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="item-title"><i class="fa fa-check" aria-hidden="true"></i> Prestamos acompañamiento de soporte y asesoría integral</h3>
                                    <div class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui, perspiciatis dolorum minus.</div><!--//item-desc-->
                                </div><!--//item-->
                            </div><!--//reasons-->

                         {{--    <div class="badges container">
                                <ul class="badges-list list-inline center-block">
                                    <li class="badge-item"><a href="#"><img class="img-responsive" src="assets/images/badges/badge-1.png" alt=""></a></li>
                                    <li class="badge-item"><a href="#"><img class="img-responsive"  src="assets/images/badges/badge-2.png" alt=""></a></li>
                                    <li class="badge-item"><a href="#"><img class="img-responsive"  src="assets/images/badges/badge-3.png" alt=""></a></li>
                                    <li class="badge-item"><a href="#"><img class="img-responsive"  src="assets/images/badges/badge-4.png" alt=""></a></li>
                                    <li class="badge-item"><a href="#"><img class="img-responsive"  src="assets/images/badges/badge-5.png" alt=""></a></li>
                                </ul>
                            </div> --}}
                        </section><!--//why-section-->



                        <section id="projects" class="projects-section section text-center">
                            <div class="container">
                                <h2 class="section-title">Lo Que Nosotros Hacemos</h2>
                                <div class="section-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br>Image credit: <a href="https://www.flickr.com/photos/84063900@N02/" target="_blank">Holland And Green Architectural Design</a>, 
                                    <a href="https://www.flickr.com/photos/martin_thomas/" target="_blank">Martin Thomas</a> and <a href="https://www.flickr.com/photos/jeremylevinedesign/" target="_blank">Jeremy Levine</a></div>
                                    <div class="latest-projects">
                                        {{-- <h3 class="sub-title">Latest Case Studies</h3> --}}
                                        <div class="row">
                                            <div class="item col-sm-4 col-xs-12">
                                                <div class="item-inner">
                                                    <div class="project-item">
                                                        <div class="img-holder img-holder-1"></div>
                                                        <div class="info-mask">
                                                            <div class="mask-inner">
                                                                <h4 class="title">El E.P.S (Icopor) </h4>
                                                                <div class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</div>
                                                                <a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#project-modal-1">Conocer Más</a>
                                                                <a class="link" href="{!! URL::to('/') !!}/icopor" ></a>
                                                            </div><!--//mask-inner-->
                                                        </div><!--//info-mask-->
                                                    </div><!--//project-item-->
                                                </div><!--//item-inner-->
                                            </div><!--//item-->
                                            <div class="item col-sm-4 col-xs-12">
                                                <div class="item-inner">
                                                    <div class="project-item">
                                                        <div class="img-holder img-holder-2"></div>
                                                        <div class="info-mask">
                                                            <div class="mask-inner">
                                                                <h4 class="title">Bovedillas y Casetones</h4>
                                                                <div class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</div>
                                                                <a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#project-modal-2">Conocer Más</a>
                                                                <a class="link" href="{!! URL::to('/') !!}/bovedillas_casetones" ></a>
                                                            </div><!--//mask-inner-->
                                                        </div><!--//info-mask-->
                                                    </div><!--//project-item-->
                                                </div><!--//item-inner-->
                                            </div><!--//item-->
                                            <div class="item col-sm-4 col-xs-12">
                                                <div class="item-inner">
                                                    <div class="project-item">
                                                        <div class="img-holder img-holder-3"></div>
                                                        <div class="info-mask">
                                                            <div class="mask-inner">
                                                                <h4 class="title">Asesoría y Soporte Técnico</h4>
                                                                <div class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</div>
                                                                <a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#project-modal-3">Conocer Más</a>
                                                                <a class="link" href="#" data-toggle="modal" data-target="#project-modal-3"></a>
                                                            </div><!--//mask-inner-->
                                                        </div><!--//info-mask-->
                                                    </div><!--//project-item-->
                                                </div><!--//item-inner-->
                                            </div><!--//item-->
                                        </div><!--//row-->
                                    </div><!--//latest-projects-->

                                    <div class="gallery">
                                        <h3 class="sub-title">Galería de Imágenes</h3>
                                        <div id="photos-wrapper" class="photos-wrapper row">
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-1.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-1-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-2.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-2-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-3.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-3-thumb.jpg" alt="" /></a></div>                                            
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-5.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-5-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-6.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-6-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-7.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-7-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-8.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-8-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-9.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-9-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-10.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-10-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-11.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-11-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-12.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-12-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-13.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-13-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-14.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-14-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-15.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-15-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-16.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-16-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-17.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-17-thumb.jpg" alt="" /></a></div>
                                            <div class="item col-md-2 col-sm-3 col-xs-4"><a href="assets/images/projects/gallery/gallery-18.jpg" data-gallery><img class="img-responsive" src="assets/images/projects/gallery/gallery-18-thumb.jpg" alt="" /></a></div>
                                        </div><!--//photos-wrapper-->
                                    </div><!--//gallery-->
                                </div><!--//container-->
                            </section><!--//section-->







                            <section id="contact" class="contact-section text-center">
                                <div class="container">
                                    <h2 class="section-title">Contáctenos</h2>
                                    <div class="contact-intro">
                                        <p>Le invitamos a que si presenta cualquier inquietud no dude en comunicarse con nosotros, tenemos distintos medios de comunicación.</p>
                                    </div>
                                    <ul class="contact-info-list list-inline">
                                        <li class="item">
                                            <span class="custom-icon icon-telephone_signal"></span>
                                            <span class="info"><a href="#">269 4134</a></span>
                                        </li>
                                        <li class="item">
                                            <span class="custom-icon icon-email"></span>
                                            <span class="info"><a href="#">info@macropor.com</a></span>
                                        </li>    
                                    </ul>
                                    <form id="contact-form" class="contact-form form" method="post" action="http://themes.3rdwavemedia.com/trades/1.0.1/mailer.php">
                                        <div id="form-messages" class="text-center"></div> 
                                        <div class="row text-left">
                                            <div class="name-group col-sm-6 col-xs-12 form-group">
                                                <div class="form-group-inner">
                                                    <label for="cname">Nombre</label>
                                                    <input type="text" class="form-control" id="cname" name="name" placeholder="Su Nombre" minlength="2"  aria-required="true" required>
                                                </div>
                                            </div><!--//name-group-->
                                            <div class="email-group col-sm-6 col-xs-12 form-group">
                                                <div class="form-group-inner">
                                                    <label for="cemail">Email</label>
                                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Su Correo" aria-required="true" required>
                                                </div>
                                            </div><!--//email-group-->
                                            <div class="phone-group col-sm-6 col-xs-12 form-group">
                                                <div class="form-group-inner">
                                                    <label for="cphone">Teléfono</label>
                                                    <input type="tel" class="form-control" id="cphone" name="phone" placeholder="Teléfono" aria-required="true" required>
                                                </div>
                                            </div><!--//phone-group-->
                                            <div class="zipcode-group col-sm-6 col-xs-12 form-group">
                                                <div class="form-group-inner">
                                                    <label for="czipcode">Ciudad</label>
                                                    <input type="text" class="form-control" id="czipcode" name="zipcode" placeholder="Ciudad" aria-required="true" required>
                                                </div>
                                            </div><!--//zipcode-group-->
                                            <div class="message-group col-xs-12 form-group">
                                                <div class="form-group-inner">
                                                    <label for="cmessage">Su mensaje</label>
                                                    <textarea class="form-control" id="cmessage" name="message" rows="6" placeholder="Mensaje"  required></textarea>
                                                </div>
                                            </div><!--//message-group-->
                                            <div class="col-xs-12 form-group">
                                                <button type="submit" class="btn btn-block btn-primary btn-cta">Enviar</button>
                                            </div> 
                                        </div><!--//row-->
                                    </form><!--//contact-form-->
                                </div><!--//container-->
                            </section><!--//contact-->

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
                                                <div class="intro">Síguenos en nuestras redes y entérate de nuestro excelente trabajo.</div>
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


                                        <div class="copyright"><b>MACROPOR</b> Induyorjac s.a.s <a href="http://themes.3rdwavemedia.com/" target="_blank"> - Todos los derechos reservados</a></div>  

                                    </div><!--//bottombar--> 
                                </footer><!--//footer-->

                                <!-- Project Modal 1 -->
                                <div id="project-modal-1" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal1Label">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center" id="projectModal1Label">Icopor</h4>
                                            </div><!--//modal-header-->
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="row">
                                                        <figure class="figure col-xs-12 col-md-5">
                                                            <img class="img-responsive" src="assets/images/projects/latest/latest-1.jpg" alt="" />
                                                            <br>
 <div class="col-md-12 col-xs-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Construcción de carreteras
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
                                                        </div>


                                                        </figure><!--//figure-->



                                                        <div class="details col-xs-12 col-md-7">
                                                            <p>El E.P.S (icopor) es un material plástico celular de estireno que contiene un agente de expansión, presenta una estructura celular cerrada y rellena de aire, aproximadamente a un 98%. Tiene la capacidad de ser aislante térmico, acústico y por su bajo peso es utilizado en la construcción como material  aligerante.</p>
                                                            <p><b>Transformación del E.P.S.:</b>  El poliestireno expandible se presenta en esferas que oscilan entre 0,2-3,0mm  y se pueden tratar con diferentes aditivos dando como resultado diferentes clasificaciones como son:</p>
                                                            <br>
                                                            <ul>
                                                                <li><b>Tipo P:</b> poliestireno de uso general</li>
                                                                <li><b>Tipo F:</b> poliestireno expandible auto extinguible</li>
                                                                <li> <b>Tipo B:</b> poliestireno expandible grado alimenticio </li>
                                                            </ul>                                                            

                                                        </div><!--//details-->
                                                       


                                                        <div class="col-md-7 col-xs-12">
                                                            <p>         
                                                                Estas esferas se transforman en tres etapas:
                                                            </p>
                                                            <ol>
                                                                <li><b>Pre expansión:</b> En esta etapa las esferas se calientan mediante la inyección de vapor de agua a una temperatura de 80 a 110°C, provocando la dilatación del pentano y la pre expansión de las perlas.</li>
                                                                <li><b>Reposo intermedio y estabilización:</b> En esta etapa las perlas se almacenan durante varias horas donde simultáneamente se estabilizan mecánicamente y liberan la humedad.</li>
                                                                <li><b>Bloqueo:</b> Se transportan las perlas hacia la maquina bloquera sometiéndolas nuevamente al vapor de agua produciendo una segunda expansión y la unión de las perlas entre si para formar una estructura polihedrica que ocupa todo el espacio de la bloquera, de esta manera se obtienen bloques para después mecanizarlos, cortarlos y transformarlos en las diferentes formas deseadas. </li>
                                                            </ul><br>
                                                            <div class="alert alert-success">
                                                                Macropor Induyorjac SAS, para dar cumplimiento con la norma de construcción NTC 1426 utiliza siempre productos de la serie F, en densidades mínimas de 10kg/m3 hasta 30kg/m3, según los requerimientos del cliente.
                                                            </div>
                                                        </div>

                                                    </div><!--//row-->

                                                    
                                    

                                                </div>
                                            </div><!--//modal-body-->
                                        </div><!--//modal-content-->
                                    </div>
                                </div><!--//modal-->

                                <!-- Project Modal 2 -->
                                <div id="project-modal-2" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal2Label">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center" id="projectModal2Label">Bovedillas y Casetones</h4>
                                            </div><!--//modal-header-->
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="row">
                                                        <figure class="figure col-xs-12 col-md-5">
                                                            <img class="img-responsive" src="assets/images/projects/latest/latest-2.jpg" alt="" />
                                                        </figure><!--//figure-->
                                                        <div class="details col-xs-12 col-md-7">
                                                            <p>Describe your project here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Describe your project here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>

                                                        </div><!--//details-->
                                                    </div><!--//row-->

                                                    <div class="review text-center">
                                                        <blockquote class="quote">
                                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                            <p>A thoroughly professional job lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.Phasellus viverra nulla ut metus varius laoreet.</p>
                                                        </blockquote>
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div><!--//rating-->
                                                        <div class="source">
                                                            <img class="customer-profile" src="assets/images/customers/customer-4.png" alt="">
                                                            <div class="customer-meta">Dan, Bristol - via <a href="#">homeadvisor.com</a></div>
                                                        </div><!--//source-->
                                                    </div><!--//review-->
                                                </div>
                                            </div><!--//modal-body-->
                                        </div><!--//modal-content-->
                                    </div>
                                </div><!--//modal-->

                                <!-- Project Modal 3 -->
                                <div id="project-modal-3" class="project-modal modal modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="projectModal3Label">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center" id="projectModal3Label">Asesoría y Soporte Técnico</h4>
                                            </div><!--//modal-header-->
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="row">
                                                        <figure class="figure col-xs-12 col-md-5">
                                                            <img class="img-responsive" src="assets/images/projects/latest/latest-3.jpg" alt="" />
                                                        </figure><!--//figure-->
                                                        <div class="details col-xs-12 col-md-7">
                                                            <p>Describe your project here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Describe your project here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>

                                                        </div><!--//details-->
                                                    </div><!--//row-->

                                                    <div class="review text-center">
                                                        <blockquote class="quote">
                                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                            <p>A thoroughly professional job lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.Phasellus viverra nulla ut metus varius laoreet.</p>
                                                        </blockquote>
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div><!--//rating-->
                                                        <div class="source">
                                                            <img class="customer-profile" src="assets/images/customers/customer-2.png" alt="">
                                                            <div class="customer-meta">Kate, Bristol - via <a href="#">homeadvisor.com</a></div>
                                                        </div><!--//source-->
                                                    </div><!--//review-->

                                                </div>
                                            </div><!--//modal-body-->
                                        </div><!--//modal-content-->
                                    </div>
                                </div><!--//modal-->


                                <!-- The Bootstrap Image Gallery lightbox -->
                                <div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
                                    <!-- The container for the modal slides -->
                                    <div class="slides"></div>
                                    <!-- Controls for the borderless lightbox -->
                                    <h3 class="title"></h3>
                                    <a class="prev">‹</a>
                                    <a class="next">›</a>
                                    <a class="close">×</a>
                                    <a class="play-pause"></a>
                                    <ol class="indicator"></ol>
                                    <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                    <div class="modal fade" tabindex="-1" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                </div>
                                                <div class="modal-body next"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left prev">
                                                        <i class="glyphicon glyphicon-chevron-left"></i>
                                                        Previous
                                                    </button>
                                                    <button type="button" class="btn btn-primary next">
                                                        Next
                                                        <i class="glyphicon glyphicon-chevron-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--blueimp-gallery-->

                                

                                <!-- Main Javascript -->          
                                <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
                                <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                                <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>  
                                <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
                                <script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script> 
                                <script type="text/javascript" src="assets/plugins/jquery-inview/jquery.inview.min.js"></script>
                                <script type="text/javascript" src="assets/plugins/isMobile/isMobile.min.js"></script>   
                                <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
                                <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script> 
                                <script type="text/javascript" src="assets/plugins/Gallery/js/jquery.blueimp-gallery.min.js"></script>
                                <script type="text/javascript" src="assets/plugins/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
                                <script type="text/javascript" src="assets/js/ajax-form.js"></script> 

                                <script type="text/javascript" src="assets/js/main.js"></script> 

                                <!--[if !IE]>-->
                                <script type="text/javascript" src="assets/js/animations.js"></script> 
                                <!--<![endif]--> 

                                <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
                                <script src="assets/js/demo/style-switcher.js"></script>


                            </body>


                            </html> 

