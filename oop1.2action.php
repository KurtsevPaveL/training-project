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
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            //1.2.1==========================================================================================
            if (isset($_POST["form1"])) {
                $numberSum = $_POST["numberSum"];
                $resultSum = "";
                for ($i = 0; $i < $numberSum; $i++) {
                    $resultSum +=($numberSum - $i );
                    $out = "The sum of all number before the $numberSum is $resultSum";
                }
            }
            //1.2.2==========================================================================================
            if (isset($_POST["form2"])) {
                $number2a1 = $_POST["number2a1"];
                $number2a2 = $_POST["number2a2"];

                function evclid($a, $b) {
                    while ($a != 0 && $b != 0) {
                        if ($a >= $b) {
                            $a = $a % $b;
                        } else {
                            $b = $b % $a;
                        }
                    }
                    return $a + $b;
                }

                $out = (evclid($number2a1, $number2a2));
                $out = "The biggest common divider is $out";
            }
//1.2.3==========================================================================================
            if (isset($_POST["form3"])) {
                $areaLength = $_POST["areaLength"];
                $areaWidth = $_POST["areaWidth"];
                $plateLength = $_POST["plateLength"];
                $areaLengthPlate = ceil($areaLength / $plateLength);
                $areaWidthPlate = ceil($areaWidth / $plateLength);
                $platesQuantity = $areaLengthPlate * $areaWidthPlate;
                $out = "You will need $platesQuantity plates with plates length $plateLength to tile area with width $areaWidth and length $areaLength";
            }
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';

                if (isset($_POST["form1"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.2.1</h4><p>$out</p></div>";
                }
                if (isset($_POST["form2"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.2.2</h4><p>$out</p></div>";
                }
                if (isset($_POST["form3"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.2.3</h4><p>$out</p></div>";
                }
            ?>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>