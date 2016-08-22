<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico">
        <title>Pavel Kurtsev</title>
        <!-- GALLERY LINKS -->
        <link rel="stylesheet" href="css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbar.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- MY STYLE-->
        <link href="css/mystyle.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <?php
                require_once 'php/header.php';
            ?>
            <div class="jumbotron">
                <h1>Gallery </h1>
                <p> Bootstrap Image Gallery is an extension to blueimp Gallery, a touch-enabled, responsive and customizable image & video gallery.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="http://getbootstrap.com/" role="button">Go to Bootstrap!</a>
                </p>
            </div>
            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
            <div id="blueimp-gallery" class="blueimp-gallery">
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
                <div class="modal fade">
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
            </div>
            <!-- THE GALLERY LIST -->
            <div id="links">
                <a href="img/wall.jpg" title="Knight" data-gallery>
                    <img src="img/swall.jpg" alt="Knight">
                </a>
                <a href="img/wall1.jpg" title="Girl" data-gallery>
                    <img src="img/swall1.jpg" alt="Girl">
                </a>
                <a href="img/wall2.jpg" title="Hero" data-gallery>
                    <img src="img/swall2.jpg" alt="Hero">
                </a>
                <a href="img/wall3.jpg" title="Dragon" data-gallery>
                    <img src="img/swall3.jpg" alt="Dragon">
                </a>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <!-- GALLERY-->
        <script src="js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
    </body>
</html>