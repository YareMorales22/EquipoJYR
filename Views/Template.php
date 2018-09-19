<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <!------------------------------------------------------------------------------->
        <html lang="en">
        <!------------------------------------------------------------------------------->
        <head>
            <meta charset="UTF-8">
            <link href="<?php echo URL?>/Public/css/materialize.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/style.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/custom.min.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/materialize.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/plugins.min.js"></script>
        <title>Inicio</title>
        </head>
        <!------------------------------------------------------------------------------->

        <!------------------------------------------------------------>
            <header id="header" class="page-topbar">

                <div class="navbar-fixed">
                    <nav class="navbar-color">
                        <div class="nav-wrapper">
                            <ul class="left">
                                <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="<?php echo URL?>/public/imagenes/logo.gif" ></a></h1></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        <body>
        <!------------------------------------------------------------>
        
        <!------------------------------------------------------------>
        <main>

        <?php
    }
    public static function footer()
    {
        ?>
        </main>
        </body>
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright © 2018 <a class="grey-text text-lighten-4"></a> TESVB</span>
                    <span class="right">601 <a class="grey-text text-lighten-4" ></a></span>
                </div>
            </div>
        </footer>
        <!------------------------------------------------------------>

        <!------------------------------------------------------------------------------->
        </html>
        <?php
    }
}

