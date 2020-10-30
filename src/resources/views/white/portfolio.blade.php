<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>KENT LOYD DOLAR - PORTFOLIO LIST</title>
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

      <!-- PROJECT LIST CONTENT-->  
      <section id="portfolio" class="block-section">
        <!-- TITLE PAGE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">My Portfolio</h2>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div><!--END  TITLE PAGE-->

        <div id="demo" class="block-page" >
          <div class="container-medium clearfix">
            <div class="row list-work">
              <div class="col-md-4 col-sm-6">
                  <div class="box-work">
                    <div class="work-preview">
                      <img src="{{ asset('public/images/p1.png') }}" alt="Development and Production AWS Infrastructure Server Projects (AWS)">
                      <div class="hover">
                        <div class="link-btns">
                          <a href="{{ asset('public/images/portfolio1200.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                        <a href="#" class="project-title" target="_blank">Development and Production Cloud Infrastructure Server Projects (AWS)</a>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="col-md-4 col-sm-6">
                  <div class="box-work">
                    <div class="work-preview">
                      <img src="{{ asset('public/images/p2.png') }}" alt="S3 Web Hosting Projects">
                      <div class="hover">
                        <div class="link-btns">
                          <a href="{{ asset('public/images/portfolio2200.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                        <a href="#" class="project-title" target="_blank">S3 Web Hosting Projects (AWS)</a>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="col-md-4 col-sm-6">
                  <div class="box-work">
                    <div class="work-preview">
                      <img src="{{ asset('public/images/p3.png') }}" alt="Speech to Text Serverless Application using AWS Lambda Projects (AWS)">
                      <div class="hover">
                        <div class="link-btns">
                          <a href="{{ asset('public/images/portfolio3200.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                        <a href="#" class="project-title" target="_blank">Speech to Text Serverless Application using AWS Lambda Projects (AWS)</a>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="col-md-4 col-sm-6">
                  <div class="box-work">
                    <div class="work-preview">
                      <img src="{{ asset('public/images/p4.png') }}" alt="Dual Security using Amazon Workspace (AWS)">
                      <div class="hover">
                        <div class="link-btns">
                          <a href="{{ asset('public/images/portfolio4200.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                        <a href="#" class="project-title" target="_blank">Dual Security using Amazon Workspace (AWS)</a>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/p5.png') }}" alt="Development and Production CI/CD Github-CodeDeploy and CodePipeline">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/portfolio5200.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="#" class="project-title" target="_blank">Development and Production CI/CD Github-CodeDeploy and CodePipeline (AWS)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300jjhs.png') }}" alt="kentldolar jjhs project">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300jjhs.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                        <a href="https://joloujapanhomespa.com/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://joloujapanhomespa.com/" class="project-title" target="_blank">Jolou Japan Home Spa (Full-Web)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300kentscsv.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300kentscsv.png') }}" title="pic 02" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="http://resume.kentscsv.com/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="http://resume.kentscsv.com/" class="project-title" target="_blank">Kent's CSV (Full-Web)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300tph.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300tph.png') }}" title="pic 03" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="http://resume.kentscsv.com/tph/index" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="http://resume.kentscsv.com/tph/index" class="project-title" target="_blank">Times Plaza Hotel (Full-Web)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300sanyo.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300sanyo.png') }}" title="pic 04" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://sanyo-i.jp/s/customer/NewYearSale_tokushu" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://sanyo-i.jp/s/customer/NewYearSale_tokushu" class="project-title" target="_blank">Sanyo i-store (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300benexy.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300benexy.png') }}" title="pic 05" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://ec.benexy.com/sp/renewal-campaign/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://ec.benexy.com/sp/renewal-campaign/" class="project-title" target="_blank">Benexy Online (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300grurond.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300grurond.png') }}" title="pic 06" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="http://test.grurond.com/lp/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="http://test.grurond.com/lp/" class="project-title" target="_blank">Grurond Online Store  (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300melrose.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300melrose.png') }}"  title="pic 07" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://store.melrose.co.jp/sp/martiniquepre_2018_summer_issue/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://store.melrose.co.jp/sp/martiniquepre_2018_summer_issue/" class="project-title" target="_blank">Melrose Online (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300virtusize.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300virtusize.png') }}"  title="pic 08" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://sanyo-i.jp/s/customer/virtusize" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://sanyo-i.jp/s/customer/virtusize" class="project-title" target="_blank">Sanyo-i (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300tegteg.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300tegteg.png') }}" title="pic 09" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://onlinestore.tegteg.tokyo/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://onlinestore.tegteg.tokyo/" class="project-title" target="_blank">Tegteg Renewal 2018</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--Pagination-->
            <div class="text-center">
              <ul class="pagination   flat-pagination ">
                <li><a href="#">Prev</a></li>
                <li><span>1</span></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
              </ul>
            </div>
            <!--End Pagination-->
          </div>
        </div>
        <?php /*
        <!-- TESTIMONIAL-->
        <div class="parallax-bg black-light bg2">
          <div class="container-medium">
            <div class="block-page ">
              <div id="carousel-example-generic" class="carousel slide carousel-testi" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="box-testimonial">
                      <img src="assets/theme/images/people/1.jpg" alt="" class="img-profile">
                      <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Jhone! This guy is Really amazing.  </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><a href="#"><img src="assets/theme/images/patner/1.png" alt="" class="img-logo-client"></a></p>
                      <p class="font-alt no-margin color-dark">Colie - Css Founder</p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-testimonial">
                      <img src="assets/theme/images/people/2.jpg" alt="" class="img-profile">
                      <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Jhone! This guy is Really Something.  </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><a href="#"><img src="assets/theme/images/patner/2.png" alt="" class="img-logo-client"></a></p>
                      <p class="font-alt no-margin color-dark">Rischy - Js Founder</p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-testimonial">
                      <img src="assets/theme/images/people/3.jpg" alt="" class="img-profile">
                      <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Jhone! This guy is Really Tallent.  </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><a href="#"><img src="assets/theme/images/patner/3.png" alt="" class="img-logo-client"></a></p>
                      <p class="font-alt no-margin color-dark">Robin - Html Founder</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- END TESTIMONIAL-->
        */ ?>
      </section> <!-- END PROJECT LIST CONTENT-->

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
    <!-- pagination jquery--> 
    <script src="{{ asset('public/plugins/validator/jquery.validate.min.js') }}"></script>
    <!-- validate jquery-->
    <script src="{{ asset('public/plugins/pagination/pagination.min.js') }}"></script>
    
    <!--=====================================================-->
    <!--configuration template-->
    <script src="{{ asset('public/white/theme/js/theme.js') }}"></script>
  </body>
</html>