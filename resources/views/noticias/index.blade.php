<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eBusiness Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="/">
                  <img src="/img/logoC2.png" alt="" title="">
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a class="page-scroll" href="/">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">¿Quienes Somos?</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Proyecto Educativo</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Cuerpo Docente</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Postulaciones</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="/noticias">Noticias</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contacto</a>
                  </li>
                  @if(Auth::check())
         @if(Auth::user()->rol=='profesor')
                    <li class="page-scroll">
                          <a href="#" class="page-scroll" data-toggle="dropdown">
                                <i ></i>
                                <p style="color:#f1f1f1;">{{ Auth::user()->nombre}}</p>
                            </a>
                      
                        
						<ul class="dropdown-menu">
                            <li ><a style="color:#000;"  href="menu">Mis Cursos</a></li>
                            <li><a style="color:#000;" href="{{url('/logout')}}">Salir</a></li>
                         
						  </li>
              @endif
              @if(Auth::user()->rol=='admin')
              <li class="page-scroll">
                          <a href="#" class="page-scroll" data-toggle="dropdown">
                                <i ></i>
                                <p style="color:#f1f1f1;">{{ Auth::user()->nombre}}</p>
                            </a>
                      
                        
						<ul class="dropdown-menu">
                            <li ><a style="color:#000;"  href="/menu">Gestionar</a></li>
							<li class="divider"></li>
                            <li><a style="color:#000;" href="{{url('/logout')}}">Salir</a></li>
                         
						  </li>
              @endif
						  @else
                    <li><a href="/login2" class="button special">Login</a></li>
                    @endif
                </ul>
              </div>


              
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Noticias</h1>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start 
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form> -->
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
               <h4>Noticias Recientes</h4>
                <div class="recent-post">
                  <!-- start single post -->
                   @foreach ($noticia2 as $noticiaR)
                  <div class="recent-single-post">
                    <div class="post-img">
                       <a href="{{URL::action('NoticiasController@show', $noticiaR->id_noticia)}}">
                      <img style="width:100%; height: 100%" src="{{$noticiaR -> foto}}" alt="" >
                        </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="{{URL::action('NoticiasController@show', $noticiaR->id_noticia)}}"> {!!str_limit($noticiaR->descripcion,55)!!}</a></p>
                    </div>
                  </div>
                     @endforeach 
                  <!-- End single post -->
                  <!-- start single post -->
                                  <!-- End single post -->
                  <!-- start single post -->
                
                  <!-- End single post -->
                  <!-- start single post -->
                
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
            
         
        
          </div>
        </div>
        <!-- End left sidebar -->
       

        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
        @foreach ($noticia as $noticias)
          <div class="row">
            <div class="col-md-11 col-sm-11 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
										<a href="{{URL::action('NoticiasController@show', $noticias->id_noticia)}}">
        <img style="width:90%; height: 90%" src="{{$noticias -> foto}}" alt="" ></a>
                    </a>
										</a>
                </div>
                <div class="blog-meta">
              
                  <span class="date-type">
											 <i class="fa fa-calendar"></i>{{$noticias->fechacreacion}}
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="{{URL::action('NoticiasController@show', $noticias->id_noticia)}}">
                {{$noticias->titulo}}</a>
										</h4>
                  <p>
                    {{str_limit($noticias->descripcion,240)}}
                  </p>
                </div>
                <span>
									 <a href="{{URL::action('NoticiasController@show', $noticias->id_noticia)}}" 
              class="ready-btn page-scroll">Ver Más</a>
									</span>
              </div>
            </div>
            @endforeach 
            <!-- End single blog -->
           <!-- End single blog -->
            <div class="blog-pagination">
                {{$noticia->render()}}          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
      <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>E</span>scuela especial evangélica presbiteriana 
</h2>
                </div>

                <p>Director: José Horacio Molina Fonseca<br/>
                  Representante Legal: Hugo Núñez Orellana <br/>
                  RBD: 2994-7
.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>información</h4>
                <p>
                 Para obtener más informacion contactanos en:
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> 712231442</p>
                  <p><span>Email:</span> escuelaeept@gmail.com</p>
                  <p><span>Hora de Trabajo:</span> 7am-8pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
