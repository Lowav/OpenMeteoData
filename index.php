<?php
session_start();
// libraries
require_once(dirname(__FILE__).'/settings.inc.php');
$settings = new settings();
require_once(dirname(__FILE__).'/lang.class.php');
$lang = new lang();
// gestion des différentes conditions (isset n'est pas utilisable dans une classe)
if(isset($_GET['lang']) && $_GET['lang'] != '')
{
	$lang->setLangActive($_GET['lang'], 'get');
}
elseif(isset($_GET['lang']) && $_GET['lang'] == '')
{
	if(isset($_COOKIE['lang']))
	{
		$lang->setLangActive($_COOKIE['lang'], 'cookie');
	}
	else
	{
		$lang->setLangActive('', '');
	}
}
elseif(isset($_COOKIE['lang']))
{
	$lang->setLangActive($_COOKIE['lang'], 'cookie');
}
else
{
	$lang->setLangActive('', '');
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang->getLangActive(); ?>">
  <head>
    <meta charset="utf-8">
    <title>OpenMeteoData</title>
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
    
    .active {
	      color: #ffffff !important;
	      background-color: transparent;    
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

    .lang {
	  top: 78%;
	  min-width: 20px;
	  background-color: #111111 !important;
	}
	.navbar .pull-right > li > .dropdown-menu, .navbar .nav > li >  .lang.dropdown-menu.pull-right {
	right: 12px;
	}
	
	.navbar .nav > li > .lang.dropdown-menu::after {
	border-bottom: 0;
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
            
            <a class="brand active" href="index.php">OpenMeteoData</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse navbar-inverse-collapse">
              <ul class="nav">
                <li><a href="#about"><?php echo NAV_ABOUT ?></a></li>
                <li><a href="#problem"><?php echo NAV_PROBLEM ?></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo NAV_TECHNICAL ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><?php echo NAV_COMPUTERS ?></a></li>
                    <li><a href="#"><?php echo NAV_WORK ?></a></li>
                    <li class="divider"></li>
                    <li class="nav-header"><?php echo NAV_DEV ?></li>
                    <li><a href="#"><?php echo NAV_PARTNERS ?></a></li>
                    <li><a href="#"><?php echo NAV_API ?></a></li>
                    <li><a href="#"><?php echo NAV_HELP ?></a></li>
                  </ul>
               </li>  
            </ul><!--/.nav -->
            <ul class="nav pull-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo '<img src="img/'.$lang->getLangActive().'.png" alt="'.$lang->getLangActive().'" />'; ?> <b class="caret"></b></a>
                  <ul class="lang dropdown-menu">
                  	<?php foreach ($lang->langs_array as $value) {
					  if($value != $lang->getLangActive()) echo '<li><a href="index.php?lang='.$value.'"><img src="img/'.$value.'.png" alt="'.$value.'" /></a></li>';
					}  	?>
                  </ul>
                </li> 
              <li class="divider-vertical"></li>
              <li><a href="#donate"><?php echo NAV_DONATE ?></a></li>
              <li><a href="#SignIn" role="button" data-toggle="modal"><?php echo NAV_SIGN ?></a></li>
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
              <h1><?php echo SLIDE1_TITLE ?></h1>
              <p class="lead"><?php echo SLIDE1_SUBTITLE ?></p>
              <a class="btn btn-large btn-primary" href="#"><?php echo SLIDE1_BTN ?></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo SLIDE2_TITLE ?></h1>
              <p class="lead"><?php echo SLIDE2_SUBTITLE ?></p>
              <a class="btn btn-large btn-primary" href="#"><?php echo SLIDE2_BTN ?></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-3.jpg" alt="">
          <div class="container">
            <div class="carousel-caption pull-right">
              <h1><?php echo SLIDE3_TITLE ?></h1>
              <p class="lead"><?php echo SLIDE3_SUBTITLE ?></p>
              <a class="btn btn-large btn-primary pull-right" href="#"><?php echo SLIDE3_BTN ?></a>
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
       
        <h2 class="featurette-heading"><?php echo FEATURETTE1_TITLE ?></h2>
        <p class="lead"><?php echo FEATURETTE1_LEAD ?><br/></p>
        <img class="featurette-image pull-right" src="http://wiki.openstreetmap.org/w/images/9/9a/ODbL-Supporter.png">
      </div>
      
      <br />
      <!-- /END THE FEATURETTES -->


      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <h2><?php echo ROW1_TITLE ?></h2>
          <p><?php echo ROW1_SUBTITLE ?></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <h2><?php echo ROW2_TITLE ?></h2>
          <p><?php echo ROW2_SUBTITLE ?></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <h2><?php echo ROW3_TITLE ?></h2>
          <p><?php echo ROW3_SUBTITLE ?></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
      
       <hr class="featurette-divider">


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#"><?php echo FOOTER_BACK ?></a></p>
        <p> 2013 &middot; OpenMeteoData</p>
      </footer>

    </div><!-- /.container -->
    
<div id="SignIn" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="SignInLabel"><?php echo SIGN_TITLE1 ?> <a href="‘#" class=""><?php echo SIGN_TITLE2 ?></a></h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal" action="login.php" method="post">
		<div class="control-group">
			<label class="control-label" for="inputLogin"><?php echo SIGN_LOGIN ?></label>
			<div class="controls">
				<input type="text" id="inputLogin" placeholder="<?php echo SIGN_LOGIN ?>">
			</div><!-- /.controls -->
		</div><!-- /.control-group -->
		<div class="control-group">
			<label class="control-label" for="inputPassword"><?php echo SIGN_PASS ?></label>
			<div class="controls">
				<input type="password" id="inputPassword" placeholder="<?php echo SIGN_PASS ?>">
			</div><!-- /.control -->
		</div><!-- /.control-group -->
		<div class="control-group">
			<div class="controls">
			<label class="checkbox">
				<input type="checkbox"> <?php echo SIGN_REMEMBER ?>
			</label>
			</div>
		</div>
   	</div><!-- /.modal-body -->
   	<div class="modal-footer">
   		<button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo CANCEL ?></button>
   		<button type="submit" class="btn btn-primary"><?php echo SIGN_IN ?></button>
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
