<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>WHO I AM - TEMPLATE</title>
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
    <link href="assets/theme/css/style.css" rel="stylesheet">
    <!-- black skin-->
    <!-- <link href="assets/theme/css/skin-black.css" rel="stylesheet"> -->
  </head>

  <body >
    <div class="wrapper">
      <div class="block-page" >
        <div class="container-xs clearfix">
          <h2 class="text-uppercase color-dark">FORM.</h2>
          <hr/>
          <form>
            <div class="form-group">
              <label>Input Text</label>
              <input type="text" class="form-control form-flat" name="text">
            </div>
            <div class="form-group">
              <label>Input Password</label>
              <input type="password" class="form-control form-flat" name="text">
            </div>



            <div class="form-group">
              <label>Input Readonly</label>
              <input type="text" class="form-control form-flat" name="text" readonly="readonly" value="readonly">
            </div>

            <div class="form-group">
              <label>Input Disabled</label>
              <input type="text" class="form-control form-flat" name="text" disabled="disabled">
            </div>

            <div class="form-group">
              <label>Input Select</label>
              <select class="form-control form-flat">
                <option>-</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
                <option value="4">Option 5</option>
                <option value="5">Option 6</option>
              </select>
            </div>

            <div class="form-group">
              <label>Input Checkbok?</label>

              <div class="checkbox flat-checkbox">
                <label>
                  <input type="checkbox"> 
                  <span class="fa fa-check"></span>
                  Checkbok One
                </label>
              </div>
              <div class="checkbox flat-checkbox">
                <label>
                  <input type="checkbox" > 
                  <span class="fa fa-check" ></span>
                  Checkbok Two
                </label>
              </div>
              <div class="checkbox flat-checkbox">
                <label>
                  <input type="checkbox"> 
                  <span class="fa fa-check"></span>
                  Checkbok There
                </label>
              </div>
            </div>

            <div class="form-group">
              <label>Input Radio</label>

              <div class="radio flat-radio">
                <label>
                  <input type="radio" name="r"> 
                  <span class="fa fa-check"></span>
                  Radio One
                </label>
              </div>
              <div class="radio flat-checkbox">
                <label>
                  <input type="radio" name="r"> 
                  <span class="fa fa-check" ></span>
                  Radio Two
                </label>
              </div>
              <div class="radio flat-checkbox">
                <label>
                  <input type="radio" name="r"> 
                  <span class="fa fa-check"></span>
                  Radio There
                </label>
              </div>
            </div>


            <div class="form-group">
              <label>Input File </label>
              <div class="input-group">
                <span class="input-group-btn">
                  <span class="btn btn-default btn-flat-solid btn-file">
                    File  <input type="file" >
                  </span>
                </span>
                <input type="text" class="form-control form-flat" readonly>
              </div>
            </div>

            <div class="form-group">
              <label>Input Textarea</label>
              <textarea class="form-control form-flat" name="message" rows="8"></textarea>
            </div>
          </form>

          <div class="white-space-60"></div>
          <h2 class="text-uppercase color-dark">Buttons.</h2>
          <hr/>


          <h4 class="color-dark  no-margin-top">Button Size</h4>
          <hr/>
          <p>   <button type="button" class="btn primary-btn btn-lg btn-flat-solid">Btn lg</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-flat-solid">Btn</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-sm btn-flat-solid">Btn sm</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-xs btn-flat-solid">Btn xs</button>
            <span class="space-inline-15"></span></p>

          <div class="white-space-30"></div>
          <h4 class="color-dark ">Button Pill</h4>
          <hr/>
          <p>   <button type="button" class="btn primary-btn btn-lg btn-flat-solid btn-pill">Btn lg</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-flat-solid btn-pill">Btn</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-sm btn-flat-solid btn-pill">Btn sm</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-xs btn-flat-solid btn-pill">Btn xs</button>
            <span class="space-inline-15"></span></p>


          <div class="white-space-30"></div>
          <h4 class="color-dark ">Button Line</h4>
          <hr/>
          <p class="bg-dark padding20">   
            <button type="button" class="btn primary-btn btn-lg btn-flat-line ">Btn lg</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-flat-line ">Btn</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-sm btn-flat-line ">Btn sm</button>
            <span class="space-inline-15"></span>

            <button type="button" class="btn primary-btn btn-xs btn-flat-line ">Btn xs</button>
            <span class="space-inline-15"></span></p>

          <div class="white-space-30"></div>
          <h4 class="color-dark ">Another Style</h4>
          <hr/>
          <p>   
            <button type="button" class="btn  btn-xs btn-default  btn-flat-solid ">Default</button>
            <button type="button" class="btn  btn-xs btn-primary btn-flat-solid ">Primary</button>
            <button type="button" class="btn  btn-xs btn-success  btn-flat-solid ">Success</button>
            <button type="button" class="btn  btn-xs btn-info btn-flat-solid ">Info</button>
            <button type="button" class="btn  btn-xs btn-warning btn-flat-solid ">Warning</button>
            <button type="button" class="btn  btn-xs btn-danger btn-flat-solid ">Danger</button>
            <button type="button" class="btn  btn-xs btn-link btn-flat-solid ">Link</button>
          </p>
          <hr/>
          <p>   
            <button type="button" class="btn  btn-xs btn-default  btn-flat-line ">Default</button>
            <button type="button" class="btn  btn-xs btn-primary btn-flat-line ">Primary</button>
            <button type="button" class="btn  btn-xs btn-success  btn-flat-line ">Success</button>
            <button type="button" class="btn  btn-xs btn-info btn-flat-line ">Info</button>
            <button type="button" class="btn  btn-xs btn-warning btn-flat-line ">Warning</button>
            <button type="button" class="btn  btn-xs btn-danger btn-flat-line ">Danger</button>
            <button type="button" class="btn  btn-xs btn-link btn-flat-line ">Link</button>
          </p>

          <hr/>
          <p>   
            <button type="button" class="btn  btn-xs btn-default  btn-flat-solid btn-pill">Default</button>
            <button type="button" class="btn  btn-xs btn-primary btn-flat-solid btn-pill">Primary</button>
            <button type="button" class="btn  btn-xs btn-success  btn-flat-solid btn-pill">success</button>
            <button type="button" class="btn  btn-xs btn-info btn-flat-solid btn-pill">info</button>
            <button type="button" class="btn  btn-xs btn-warning btn-flat-solid btn-pill">warning</button>
            <button type="button" class="btn  btn-xs btn-danger btn-flat-solid btn-pill">danger</button>
            <button type="button" class="btn  btn-xs btn-link btn-flat-solid btn-pill">Link</button>
          </p>

          <hr/>
          <p>   
            <button type="button" class="btn  btn-xs btn-default  btn-flat-line btn-pill">Default</button>
            <button type="button" class="btn  btn-xs btn-primary btn-flat-line btn-pill">Primary</button>
            <button type="button" class="btn  btn-xs btn-success  btn-flat-line btn-pill">success</button>
            <button type="button" class="btn  btn-xs btn-info btn-flat-line btn-pill">info</button>
            <button type="button" class="btn  btn-xs btn-warning btn-flat-line btn-pill">warning</button>
            <button type="button" class="btn  btn-xs btn-danger btn-flat-line btn-pill">danger</button>
            <button type="button" class="btn  btn-xs btn-link btn-flat-line btn-pill">Link</button>
          </p>

          <div class="white-space-60"></div>

          <!--Typography-->
          <h4 class="text-uppercase color-dark">Typography</h4>
          <hr/>
          <h1 class="color-dark">Heading 1</h1>
          <p>
            Immersive garden was founded by award winning Art director Dilshan Arukatti. Immersive garden is a creative team that has been passionately experiencing for over a decade new ways to bring to the world meaningful digital experiences that will touch people deep in their emotion and last in time.
          </p>
          <h2 class="color-dark">Heading 2</h2>
          <p>
            Immersive garden was founded by award winning Art director Dilshan Arukatti. Immersive garden is a creative team that has been passionately experiencing for over a decade new ways to bring to the world meaningful digital experiences that will touch people deep in their emotion and last in time.
          </p>

          <h3 class="color-dark">Heading 3</h3>
          <p>
            Immersive garden was founded by award winning Art director Dilshan Arukatti. Immersive garden is a creative team that has been passionately experiencing for over a decade new ways to bring to the world meaningful digital experiences that will touch people deep in their emotion and last in time.
          </p>
          <h4 class="color-dark">Heading 4</h4>
          <p>
            Immersive garden was founded by award winning Art director Dilshan Arukatti. Immersive garden is a creative team that has been passionately experiencing for over a decade new ways to bring to the world meaningful digital experiences that will touch people deep in their emotion and last in time.
          </p>

          <h5 class="color-dark">Heading 5</h5>
          <p>
            Immersive garden was founded by award winning Art director Dilshan Arukatti. Immersive garden is a creative team that has been passionately experiencing for over a decade new ways to bring to the world meaningful digital experiences that will touch people deep in their emotion and last in time.
          </p>
          <h6 class="color-dark">Heading 6</h6>
          <p>
            Immersive garden was founded by award winning Art director Dilshan Arukatti. Immersive garden is a creative team that has been passionately experiencing for over a decade new ways to bring to the world meaningful digital experiences that will touch people deep in their emotion and last in time.
          </p>
          <div class="devider"></div>
          <!--ENd Typography-->
          <div class="white-space-60"></div>
          <!--Tooltip-->

          <h2 class="text-uppercase color-dark">Tooltips.</h2>
          <hr/>
          <p>
            <button data-toggle="tooltip"  data-placement="top" title="Tooltip Top" class="btn btn-default">Tooltip Top</button>
            <button data-toggle="tooltip"  data-placement="bottom" title="Tooltip Bottom" class="btn btn-default">Tooltip Bottom</button>
            <button data-toggle="tooltip"  data-placement="left" title="Tooltip Left" class="btn btn-default">Tooltip Left</button>
            <button data-toggle="tooltip"  data-placement="right" title="Tooltip Right" class="btn btn-default">Tooltip Right</button>
          </p>
          <!--End Tooltip-->

          <div class="white-space-60"></div>


          <!--Tabs-->


          <h2 class="text-uppercase color-dark">Tabs.</h2>
          <hr/>

          <ul id="myTab" class="nav nav-tabs flat-nav-tabs" role="tablist">
            <li class="active"><a href="#tab0" role="tab" data-toggle="tab">Tab 1</a></li>
            <li><a href="#tab1" role="tab" data-toggle="tab">Tab 2</a></li>
            <li><a href="#tab2" role="tab" data-toggle="tab">Tab 3</a></li>
            <li><a href="#tab3" role="tab" data-toggle="tab" >Tab 4</a></li>
          </ul>

          <div id="myTabContent" class="tab-content flat-tab-content">
            <div class="tab-pane fade in active" id="tab0">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, odio, esse, atque, rem provident neque quos iure iusto quam dolorum architecto sunt itaque ut quia!</p>
              </blockquote>  
              <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio id, ornare tortor</p>
            </div>
            <div class="tab-pane fade" id="tab1">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

            </div>
            <div class="tab-pane fade" id="tab2">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, odio, esse, atque, rem provident neque quos iure iusto quam dolorum architecto sunt itaque ut quia!</p>
              </blockquote>  
              <p>Vel ferment
            </div>
            <div class="tab-pane fade" id="tab3">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, odio, esse, atque, rem provident neque quos iure iusto quam dolorum architecto sunt itaque ut quia!</p>
              </blockquote>  
              <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio id, ornare tortor</p>


            </div>

          </div>
          <!--End Tabs-->





        </div>
      </div>
    </div>


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