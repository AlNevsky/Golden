<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLDEN</title>
    <link rel="stylesheet" href="bower_components/foundation-sites/dist/foundation.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
  </head>
  <body>

    <!--HEADER-->
<div data-sticky-container>
  <div class="sticky header-wrap" data-sticky data-margin-top="0">
    <div id="header">
      <div class="row clearfix">
        <div class="large-12 column">
          <div class="logo float-left">
            <a href="#"><img src="img/logo.png" alt="logo"></a>
          </div>
          <div class="top-bar">
            <div class="top-bar-title float-right">
              <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                <button class="menu-icon light" type="button" data-toggle></button>
              </span>
            </div>
            <div id="responsive-menu">
              <div class="top-bar-right">
                <ul class="dropdown menu" data-dropdown-menu>
                  <li><a href="#home" class="scrollto">home</a></li>
                  <li><a href="#services" class="scrollto">services</a></li>
                  <li><a href="#portfolio" class="scrollto">portfolio</a></li>
                  <!--<li><a href="#abo" class="scrollto">about</a></li>-->
                  <li><a href="#contact_us" class="scrollto">contact</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

    <!--HOME-->

    <div id="home">
      <div class="row">
        <div class="small-12">
          <h1 class="home-title wow bounceInLeft text-center">Welcome To Our Studio!</h1>
          <h2 class="home-subtitle wow bounceInRight text-center">IT'S NICE TO MEET YOU</h2>
          <button class="btn wow zoomIn" data-open="myModal">TELL ME MORE</button>
        </div>


        <div id="myModal" class="reveal large" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2 id="modalTitle">Hello!</h2>
          <p class="lead">Comrade</p>
          <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>

      </div>
    </div>

    <!--SERVICES-->

    <div id="services" class="box">
      <div class="row">
        <div class="small-12 column">

          <div class="title_animated wow flipInY" data-wow-offset="150">
            <h3 class="title">services</h3>
            <p class="descr">Lorem ipsum dolor sit amet, consectetur.</p>
          </div>

          <div class="services-wrap">
            <div class="small-12 medium-4 column wow zoomInUp commerce"  data-wow-offset="150">
              <h4 class="title_item">E-Commerce</h4>
              <p class="services_descr">Proin iaculis purus consequat sem cure <br>
                digni ssim. Donec porttitora entum <br> suscipit.</p>
            </div>
            <div class="small-12 medium-4 column wow zoomInUp responsive" data-wow-delay="0.3s" data-wow-offset="150">
              <h4 class="title_item">Responsive Web</h4>
              <p class="services_descr">Proin iaculis purus consequat sem cure <br>
                digni ssim. Donec porttitora entum <br> suscipit.</p>
            </div>
            <div class="small-12 medium-4 column wow zoomInUp security" data-wow-delay="0.5s" data-wow-offset="150">
              <h4 class="title_item">Web Security</h4>
              <p class="services_descr">Proin iaculis purus consequat sem cure <br>
                digni ssim. Donec porttitora entum <br> suscipit.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!--PORTFOLIO-->

    <div id="portfolio" class="box">
      <div class="row">
        <div class="title_animated wow flipInY" data-wow-offset="150">
          <h4 class="title">our portfolio</h4>
          <p class="descr">Proin iaculis purus consequat sem cure.</p>
        </div>


         <div class="row">
           <div class="portfolio-wrap small-12 column">
             <div class="small-12 medium-4 large-4 column">
               <div class="portfolio_item wow zoomIn" data-wow-offset="150">
                 <a href="#"><img src="img/portfolio_img1.jpg" alt="error_img"></a>
                 <div class="p_item_info">
                    <h4 class="title_item">Ebony & Ivory</h4>
                    <p class="portfolio_descr">Branding</p>
                 </div>
               </div>
             </div>
             <div class="small-12 medium-4 large-4 column">
               <div class="portfolio_item wow zoomIn" data-wow-delay="0.1s" data-wow-offset="150">
                 <a href="#"><img src="img/portfolio_img2.jpg" alt="error_img"></a>
                 <div class="p_item_info">
                   <h4 class="title_item">Smart Stationary</h4>
                   <p class="portfolio_descr">Print Design</p>
                 </div>
               </div>
             </div>
             <div class="small-12 medium-4 large-4 column">
               <div class="portfolio_item wow zoomIn" data-wow-delay="0.3s" data-wow-offset="150">
                 <a href="#"><img src="img/portfolio_img3.jpg" alt="error_img"></a>
                 <div class="p_item_info">
                   <h4 class="title_item">Clever Poster</h4>
                   <p class="portfolio_descr">Print Design</p>
                 </div>
               </div>
             </div>
         </div>
           <div class="portfolio-wrap small-12 column">
             <div class="small-12 medium-4 large-4 column">
               <div class="portfolio_item wow zoomIn" data-wow-delay="0.5s" data-wow-offset="150">
                 <a href="#"><img src="img/portfolio_img4.jpg" alt="error_img"></a>
                <div class="p_item_info">
                  <h4 class="title_item">Ebony & Ivory</h4>
                  <p class="portfolio_descr">Branding</p>
                </div>
               </div>
             </div>
             <div class="small-12 medium-4 large-4 column">
               <div class="portfolio_item wow zoomIn" data-wow-delay="0.7s" data-wow-offset="150">
                 <a href="#"><img src="img/portfolio_img5.jpg" alt="error_img"></a>
                 <div class="p_item_info">
                   <h4 class="title_item">Ebony & Ivory</h4>
                  <p class="portfolio_descr">Branding</p>
                 </div>
               </div>
             </div>
             <div class="small-12 medium-4 large-4 column">
               <div class="portfolio_item wow zoomIn" data-wow-delay="0.9s" data-wow-offset="150">
                 <a href="#"><img src="img/portfolio_img6.jpg" alt="error_img"></a>
                 <div class="p_item_info">
                   <h4 class="title_item">Ebony & Ivory</h4>
                   <p class="portfolio_descr">Branding</p>
                 </div>
               </div>
             </div>
           </div>
        </div>
    </div>

  </div>

    <!--ABOUT US-->


    <!--OUR AMAZING TEAM-->

    <div id="our_team" class="box">
      <div class="row">

        <div class="title_animated wow flipInY" data-wow-offset="150">
          <p class="title">our amazing team</p>
          <p class="descr">Proin iaculis purus consequat sem cure.</p>
        </div>




        <div class="member_wrap text-center row small-12 column">

          <div class="member1 wow zoomIn medium-4 small-12 column" data-wow-delay="0.3s" data-wow-offset="150">
            <div><img src="./img/marketer_avatar.png" alt="error"></div>
            <p class="member_name">kimberly <br> thompson</p>
            <p class="member_profession">marketer</p>
            <div class="amaizing_social_menu menu-centered">
              <ul class="menu">
                <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>


          <div class="member1 wow zoomIn medium-4 small-12 column" data-wow-delay="0.5s" data-wow-offset="150">
            <div><img src="./img/coder_avatar.png" alt="error"></div>
            <p class="member_name">Monica <br> Massimo</p>
            <p class="member_profession">Coder</p>
            <div class="amaizing_social_menu menu-centered">
              <ul class="menu">
                <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>


          <div class="member1 wow zoomIn medium-4 small-12 column" data-wow-delay="0.7s" data-wow-offset="150">
            <div><img src="./img/designer_avatar.png" alt="error"></div>
            <p class="member_name">evelin <br> brooks</p>
            <p class="member_profession wow fadeIn">graphic designer</p>
            <div class="amaizing_social_menu menu-centered">
              <ul class="menu">
                <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="text-center member_profession wow fadeIn" data-wow-delay="0.5s" data-wow-offset="150">
          Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit <br>
          aenean rhoncus posuere odio in tincidunt proin iaculis.
        </p>
      </div>
    </div>

    <!--CONTACT US-->
    <div id="contact_us" class="box">

      <div class="title_animated wow flipInY">
        <p class="title" style="color: #fff">contact us</p>
        <p class="descr">Proin iaculis purus consequat sem cure.</p>
      </div>

      <div class="contact_form_wrap row small-12 columns">


        <div class="contact_form_left wow bounceInLeft small-12 medium-6 large-6 column">
          <form>
            <div class="row small-12 columns">
              <div><label><input type="text" placeholder="YOUR NAME*"></label></div>
              <div><label><input type="email" placeholder="YOUR EMAIL*"></label></div>
              <div><label><input type="text" placeholder="SUBJECT"></label></div>
            </div>
          </form>
        </div>


        <div class="contact_form_right wow bounceInRight small-12 medium-6 large-6 column">


          <form><label><textarea type="text" placeholder="YOUR MESSAGE*" style="height: 150px"></textarea>></label>
          </form>
        </div>


      </div>
     
    </div>


    <!--FOOTER-->

    <footer id="footer">
        <div class="row">
          <div class="footer_content text-center clearfix small-12 columns">
            <div class="social_menu menu-centered">
                <ul class="menu ">
                  <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <p class="license">Copyright 2016 Nevsky.Prod</p>
            <p>
              <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                     src="http://jigsaw.w3.org/css-validator/images/vcss"
                     alt="Правильный CSS!" />
              </a>
            </p>

          </div>
        </div>
    </footer>

                                <!--SCRIPT-->


    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/what-input/what-input.min.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.min.js"></script>
    <script src="bower_components/motion-ui/dist/motion-ui.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/wow.min.js"></script>

    <!--<script src="js/animate-css.js"></script>-->
    <script src="js/main.js"></script>

    <script>
      $(document).foundation();
      new WOW().init();
    </script>




  </body>


</html>
