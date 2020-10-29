<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>WHO I AM - DETAILS</title>
    <!--favicon-->
    <link rel="apple-touch-icon" href="{{ asset('public/images/logo.png') }}">
    <link rel="icon" href="{{ asset('public/images/logok_rda_icon.ico') }}">

    <!--pace (page loader) style-->
    <link href="{{ asset('public/plugins/pace/pace.css') }}" rel="stylesheet">
    <script src="{{ asset('public/plugins/pace/pace.min.js') }}"></script>

    <!-- Bootstrap -->
    <link href="{{ asset('public/plugins/bootstrap-3.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('public/plugins/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- typed style -->
    <link href="{{ asset('public/plugins/typed/typed.css') }}" rel="stylesheet">
    <!-- popup style-->
    <link href="{{ asset('public/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- simple Captcha-->
    <link href="{{ asset('public/plugins/simpleCaptcha/jquery.simpleCaptcha.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
    </script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Themes styles-->
    <link href="{{ asset('public/white/theme/css/style.css') }}" rel="stylesheet">
    <!-- black skin-->
    <!-- <link href="assets/theme/css/skin-black.css" rel="stylesheet"> -->
  </head>
  <body>
    <!--wrapper page-->
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header no-window" id="home">
        <div class="content-table header-content-fixed">
          <div class="whoim">
            <div class="box-line text-uppercase text-bold">
              Who I Am
            </div>
          </div>
          <div class="v-content">
            <div class="container">
              <h1 class="text-uppercase color-dark name">i’m Jhone doe</h1>
              <h4  class="text-uppercase color-dark font-alt job"><span id="typed" class="typed"></span></h4>
            </div>
          </div>
        </div>

        <!-- Main navbar -->
        <div class="menu-area">
          <div class="toogle-bars">
            <a href="#menu-collapse" data-toggle="collapse" class="collapsed"><i class="fa fa-bars ic-open"></i> <i class="fa fa-remove ic-close"></i> MENU</a>
          </div>
          <div class="menu-collapse collapse" id="menu-collapse">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <ul class="breadcrumb main-nav no-space">
                    <li ><a href="index.html#contact" id="hireme-tab"><i class="fa fa-briefcase"></i> Hire Me Now</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="breadcrumb main-nav nav">
                    <li class=""><a href="index.html#home">Home</a></li>
                    <li class=""><a href="index.html#about">About</a></li>
                    <li class=""><a href="index.html#resume">Resume</a></li>
                    <li class="active"><a href="index.html#portfolio">Portfolio</a></li>
                    <li class=""><a href="index.html#blog">Blog</a></li>
                    <li class=""><a href="index.html#contact" id="contact-tab">Contact</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <ul class="breadcrumb main-nav no-space">
                    <li>
                      <a href="#" ><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"  ><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"  ><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#" ><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#" ><i class="fa fa-github"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Main navbar -->
      </header><!-- End Main Header -->

      <!-- PROJECT DETAILS-->
      <section id="portfolio" class="block-section">
        <!-- TITLE PAGE -->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">Project Title</h2>
              <p>Branding - Identity - Graphic Design</p>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div><!-- END TITLE PAGE -->


        <div class="block-page" >
          <div class="container-medium clearfix">
            <!--Slider-->
            <div id="carousel-example-generic" class="carousel slide flat-carousel" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item ">
                  <img src="assets/theme/images/slider/1.jpg " alt="">

                </div>
                <div class="item active">
                  <img src="assets/theme/images/slider/1.jpg " alt="">

                </div>
                <div class="item">
                  <img src="assets/theme/images/slider/1.jpg " alt="">

                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-angle-double-left ic-left" ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-angle-double-right ic-right" ></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!--End Slider-->

            <div class="white-space-30"></div>

            <div class="row">
              <div class="col-sm-6">
                <h3 class="text-uppercase color-dark text-bold">Description</h3>
                <div class="white-space-10"></div>
                <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo.</p>
                <p> porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur.</p>
                <div class="white-space-20"></div>
                <p><a href="#" class="btn btn-flat-solid primary-btn">Visit Site</a></p>
                <div class="white-space-20"></div>
              </div>
              <div class="col-sm-6">
                <div class="white-space-20"></div>
                <div class="box-testimonial left">
                  <img src="assets/theme/images/people/1.jpg" alt="" class="img-profile">
                  <h5 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Jhone! This guy is Really amazing.  </h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p><a href="#"><img src="assets/theme/images/patner/1.png" alt="" class="img-logo-client"></a></p>
                  <p class="font-alt no-margin color-dark">Colie - Css Founder</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- BG PARALLAX BTNS-->
        <div class="parallax-bg white-light bg1">
          <div class="container">
            <div class="padding30 text-center relative">
              <a href="#" class="btn btn-flat-line btn-default light-font btn-xs"><i class="fa fa-angle-left"></i>  PREV PROJECT</a>
              <span class="space-inline-15 hidden-xs"></span>
              <a href="#" class="btn btn-flat-line btn-default light-font btn-xs">NEXT PROJECT <i class="fa fa-angle-right"></i> </a>
            </div>
          </div>
        </div><!-- END BG PARALLAX BTNS-->
      </section><!-- END PROJECT DETAILS-->

      <!--FOOTER-->
      <footer class="main-footer">
        <div class="container">
          <div class="folow-me">
            Follow Me On
          </div>
          <ul class="list-inline social-links text-center">
            <li>
              <a href="#"  data-toggle="tooltip"  data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"  data-toggle="tooltip"  data-placement="top" title="Google"><i class="fa fa-google"></i></a>
            </li>
            <li>
              <a href="#"  data-toggle="tooltip"  data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"  data-toggle="tooltip"  data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
              <a href="#"  data-toggle="tooltip"  data-placement="top" title="Github"><i class="fa fa-github"></i></a>
            </li>
          </ul>
          <p class="text-center no-margin">
            Solid - All Rights Reserved &COPY; 2014
          </p>
          <a href="#home" class="back-to-top"><i class="fa fa-angle-double-up" ></i></a>
        </div>
      </footer><!--END FOOTER-->
    </div><!--End wrapper page-->



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('public/plugins/jquery.js') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap-3.3.1/js/bootstrap.min.js') }}"></script>

    <!-- maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaRXO_URtinYZvUJ1WNLPgwQX-xfQhcs" type="text/javascript"></script> 
    <script src="{{ asset('public/plugins/jquery.ui.map.js') }}"></script> 
    <!-- advanced easing options -->
    <script src="{{ asset('public/plugins/jquery.easing-1.3.pack.js') }}"></script>
    <!-- parallax bg js -->
    <script src="{{ asset('public/plugins/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox js -->
    <script src="{{ asset('public/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- typed animation-->
    <script src="{{ asset('public/plugins/typed/typed.js') }}"></script>
    <!-- easy chart-->
    <script src="{{ asset('public/plugins/easypiechart/jquery.easypiechart.min.js ') }}"></script>
    <!-- simple Captcha -->
    <script src="{{ asset('public/plugins/simpleCaptcha/jquery.simpleCaptcha.js ') }}"></script>
    <!-- simple Ajax Uploader -->
    <script src="{{ asset('public/plugins/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js') }}"></script>
    <!-- validate jquery-->
    <script src="{{ asset('public/plugins/validator/jquery.validate.min.js') }}"></script>

    <!--=====================================================-->
    <!--configuration template-->
    <script src="{{ asset('public/white/theme/js/theme.js') }}"></script>
  </body>
</html>