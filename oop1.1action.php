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
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                $sum = $number1 + $number2;
                $resultSum = "You should entered two numbers!</br>The first number is \"$number1\" and the second number is \"$number2\"<br>The summary of those numbers is \"$sum\"";
            }
            //1.2.2==========================================================================================
            if (isset($_POST["form2"])) {
                $sideTriangle = $_POST["sideTriangle"];
                $res = 1 / 4 * pow($sideTriangle, 2) * sqrt(3);
                $resulttriangleS = "Your square of triangle with side $sideTriangle equals $res, using formula '1/4*pow($sideTriangle,2)*sqrt(3)'";
            }
            //1.3.3==========================================================================================
            if (isset($_POST["form3"])) {
                $distance = $_POST["distance"];
                $time = $_POST["time"];
                $speedKmHr = round($distance / $time);
                $speedKmHrOutput = "Your speed is about $speedKmHr kelometers per hour<br>";
                $speedMetersHr = round(($distance * 1000) / ($time * 60 * 60));
                $speedMetersHrOutput = "Or is about $speedMetersHr meters per second";
            }
            //1.1.4==========================================================================================
            if (isset($_POST["form4"])) {
                $numberInF = $_POST["numberInF"];

                function fact($somenum) {
                    $numOut = $somenum;
                    for ($i = 1; $i < $somenum; $i++) {
                        $numOut *= ($somenum - $i);
                    }
                    return $numOut;
                }

                $factOutput = "Factorial of number $numberInF is" . (fact($numberInF));
            }
            //1.1.5==========================================================================================
            if (isset($_POST["form5"])) {
                $numberInR = $_POST["numberInR"];
                $numberInRaise = $_POST["numberInRaise"];

                function countRaise($n1, $n2) {
                    return ($raisedNumber = pow($n1, $n2));
                }

                $raisedOutput = "Number $numberInR raise using number $numberInRaise and it's became a " . (countRaise($numberInR, $numberInRaise));
            }
            //1.1.6==========================================================================================
            if (isset($_POST["form6"])) {
                $textarea = $_POST["textarea"];
                $a = "a";
                $b = "b";
                $sumA = substr_count($textarea, "a");
                $sumB = substr_count($textarea, $b);
                $textareaOutput = "Letter 'a' found in the text $sumA times. Letter 'b' found in the text $sumB times  ";
            }
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';

                if (isset($_POST["form1"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.1.1</h4><p>$resultSum</p></div>";
                }
                if (isset($_POST["form2"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.1.2</h4><p>$resulttriangleS</p></div>";
                }
                if (isset($_POST["form3"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.1.3</h4><p>$speedKmHrOutput $speedMetersHrOutput</p></div>";
                }
                if (isset($_POST["form4"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.1.4</h4><p>$factOutput</p></div>";
                }
                if (isset($_POST["form5"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.1.5</h4><p>$raisedOutput</p></div>";
                }
                if (isset($_POST["form6"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.1.6</h4><p>$textareaOutput</p></div>";
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