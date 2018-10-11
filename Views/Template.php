<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
       ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                    <meta charset="utf-8">
                    <title>Reveal Bootstrap Template</title>
                    <meta content="width=device-width, initial-scale=1.0" name="viewport">
                    <meta content="" name="keywords">
                    <meta content="" name="description">
                    <link href="<?php echo URL?>/Public/img/favicon.png" rel="icon">
                    <link href="<?php echo URL?>/Public/img/apple-touch-icon.png" rel="apple-touch-icon">
                    <link href="<?php echo URL?>/Public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/lib/animate/animate.min.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
                    <link href="<?php echo URL?>/Public/css/style.css" rel="stylesheet">

                    <script src="<?php echo URL?>Public/lib/jquery/jquery.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/jquery/jquery-migrate.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/easing/easing.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/superfish/hoverIntent.js"></script>
                    <script src="<?php echo URL?>Public/lib/superfish/superfish.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/wow/wow.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/magnific-popup/magnific-popup.min.js"></script>
                    <script src="<?php echo URL?>Public/lib/sticky/sticky.js"></script>
                    <script src="<?php echo URL?>Public/contactform/contactform.js"></script>
                    <script src="<?php echo URL?>Public/js/main.js"></script>
            </head>

            <section id="topbar" class="d-none d-lg-block">
                <div class="container clearfix">
                    <div class="contact-info float-left">
                        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                        <i class="fa fa-phone"></i> +1 5589 55488 55
                    </div>
                    <div class="social-links float-right">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </section>

            <header id="header">
                <div class="container">

                    <div id="logo" class="pull-left">
                        <h1><a href="#body" class="scrollto">Reve<span>al</span></a></h1>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
                    </div>

                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="#body">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#team">Team</a></li>
                            <li class="menu-has-children"><a href="">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down 1</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                    <li><a href="#">Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </header>
        <?php
    }
}

