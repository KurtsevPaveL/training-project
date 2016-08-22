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
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript" ></script>
        <script src="js/validate.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript" ></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/add.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <?php
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                require_once 'php/header.php';
            ?>
            <div class="jumbotron">
                <div>
                    <h4>OOP Task 4: Solution</h4>
                </div>
                <?php
                    $addData = filter_input(INPUT_POST, "addData");
                    if (isset($addData)) {
                        require_once 'php/oop4php/addData.php';
                    }
                    $showData = filter_input(INPUT_POST, "showData");
                    if (isset($showData)) {
                        require_once 'php/oop4php/showData.php';
                    }
                ?>
            </div>
        </div>
    </body>
</html>