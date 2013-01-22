<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home &middot; OpenMeteoData</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }


     /* CUSTOMIZE COLORS
    -------------------------------------------------- */

    /* Colors matched with slides, like the second one with clouds and blue sky */

    .btn-primary {
	  color: #ffffff;
	  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	  background-color: #32508a;
	  background-image: -moz-linear-gradient(top, #325c8a, #323f8a);
	  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#325c8a), to(#323f8a));
	  background-image: -webkit-linear-gradient(top, #325c8a, #323f8a);
	  background-image: -o-linear-gradient(top, #325c8a, #323f8a);
	  background-image: linear-gradient(to bottom, #325c8a, #323f8a);
	  background-repeat: repeat-x;
	  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff325c8a', endColorstr='#ff323f8a', GradientType=0);
	  border-color: #323f8a #323f8a #1e2552;
	  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	  *background-color: #323f8a;
	  /* Darken IE7 buttons by default so they stand out more given they won't have borders */
	
	  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  }
	.btn-primary:hover,
	.btn-primary:active,
	.btn-primary.active,
	.btn-primary.disabled,
	.btn-primary[disabled] {
	  color: #ffffff;
	  background-color: #323f8a;
	  *background-color: #2b3677;
	}
	.btn-primary:active,
	.btn-primary.active {
	  background-color: #242e65 \9;
	}

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      margin-left: -5px;
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

   /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .lead {
 	   max-width: 500px;
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }


    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 30px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 0; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */


    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {
   
	  .navbar {
	    margin: 0;
	  }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    
    
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-fixed-top navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            
            <a class="brand" href="index.php">OpenMeteoData</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse navbar-inverse-collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">European Data Problem</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Technical <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Our computer cluster</a></li>
                    <li><a href="#">How does it works ?</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Development</li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">API</a></li>
                    <li><a href="#">Help</a></li>
                  </ul>
                </li>  
                <li><a href="#contact">Contact</a></li>
              </ul><!--/.nav -->
              <ul class="nav pull-right">
              <li class="divider-vertical"></li>
              <li><a href="#contact">Donate</a></li>
              <li><a href="#SignIn" role="button" data-toggle="modal">Sign in</a></li>
              </ul><!--/.nav pull-right -->
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Take a tour.</h1>
              <p class="lead">OpenMeteoData can provide multiples resources for enterprises or personal uses.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Take what you need. For free.</h1>
              <p class="lead">Meteo always been part of our lives, and now you can see on your own what's coming</p>
              <a class="btn btn-large btn-primary" href="#">How does it works ?</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-3.jpg" alt="">
          <div class="container">
            <div class="carousel-caption pull-right">
              <h1>High quality servers.</h1>
              <p class="lead">We have our own servers, and we provide meteo datas right from them, without interpretation.</p>
              <a class="btn btn-large btn-primary pull-right" href="#">See more</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="featurette">
       
        <h2 class="featurette-heading">Yes it's free. <span class="muted">You can even modify it.</span></h2>
        <p class="lead">All datas are published under <a href="http://opendatacommons.org/licenses/odbl/">Open Database License (ODbL)</a> which means that you can :<br/></p>
        <img class="featurette-image pull-right" src="http://wiki.openstreetmap.org/w/images/9/9a/ODbL-Supporter.png">
      </div>
      
      <br />
      <!-- /END THE FEATURETTES -->


      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Share</h2>
          <p>You are free to copy, distribute and use the database.</p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Create</h2>
          <p>You are free to produce works from the database.</p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Adapt</h2>
          <p>You are free to modify, transform and build upon the database.</p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
      
       <hr class="featurette-divider">


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p> 2013 &middot; OpenMeteoData</p>
      </footer>

    </div><!-- /.container -->
    
<div id="SignIn" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="SignInLabel">Not a member ?  <a href="‘#" class="">Register</a></h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal" action="login.php" method="post">
		<div class="control-group">
			<label class="control-label" for="inputLogin">Login</label>
			<div class="controls">
				<input type="text" id="inputLogin" placeholder="Login">
			</div><!-- /.controls -->
		</div><!-- /.control-group -->
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input type="password" id="inputPassword" placeholder="Password">
			</div><!-- /.control -->
		</div><!-- /.control-group -->
		<div class="control-group">
			<div class="controls">
			<label class="checkbox">
				<input type="checkbox"> Remember me
			</label>
			</div>
		</div>
   	</div><!-- /.modal-body -->
   	<div class="modal-footer">
   		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
   		<button type="submit" class="btn btn-primary">Sign In</button>
   		</form>
   	</div>
</div><!-- /.SignIn -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
