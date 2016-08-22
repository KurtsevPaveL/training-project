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
            //1.3.1==========================================================================================
            if (isset($_POST["form1"])) {
                $mon = +($_POST["number"]);
                if ($mon >= 0 && $mon <= 2000) {
                    switch ($mon) {
                        case ($mon <= 0): $an = "nobody";
                            break;
                        case ($mon < 5): $an = "few";
                            break;
                        case ($mon < 10): $an = "several";
                            break;
                        case ($mon < 20): $an = "pack";
                            break;
                        case ($mon < 50): $an = "lots";
                            break;
                        case ($mon < 100): $an = "horde";
                            break;
                        case ($mon < 250): $an = "throng";
                            break;
                        case ($mon < 500): $an = "swarm";
                            break;
                        case ($mon < 1000): $an = "zounds";
                            break;
                        case ($mon < 2000): $an = "legion";
                            break;
                    }
                    $out = "$mon monsters equals \"$an\" in the Anynyldyakva language!";
                } else {
                    $out = "Please type the correct data";
                }
            }
            //1.3.2==========================================================================================
            if (isset($_POST["form2"])) {
                $pin1 = $_POST["pin1"];
                $pin2 = $_POST["pin2"];
                if ($pin1 % 2 == 0 || $pin2 % 2 != 0) {
                    $out = "Putin will hack the lock and steal the bike someday!(With pin $pin1 on the first lock and pin $pin2 on the second)";
                } else {
                    $out = "Relax, Putin willn't hack the lock! (With pin $pin1 on the first lock and pin $pin2 on the second)";
                }
            }
            //1.3.3==========================================================================================
            if (isset($_POST["form3"])) {
                $n = +($_POST["numJustin"]);
                if (!($n % 5)) {
                    $n1 = substr($n, 0, -1);
                    $res = +($n1 * ($n1 + 1) . '25');
                    $out = "You've entered $n. Multiplied by itself is equal $res";
                } else {
                    $out = "You've entered The number which not a multiple of 5";
                }
            }

            //1.3.4==========================================================================================
            if (isset($_POST["form4"])) {
                $h = $_POST["home"];
                $w = $_POST["work"];
                $l = $_POST["subwayLine"];

                if ($l <= 100 && $w <= 100 && $h <= 100 && $l >= 0 && $w >= 0 && $h >= 0 && $l >= $h && $l >= $w) {
                    $m = abs($h - $w);
                    $c = $l / 2;
                    if ($c >= $m) {
                        $r = $m - 1;
                    } else {
                        $r = $l - $m - 1;
                    }
                    $out = "Obama lives at the \"$h\" station, and work at the \"$w\" station" . "</br>" .
                        "the subway Line has a length of \"$l\" stations. It will take \"$r\" to get home";
                } else {
                    $out = "Please type the correct data";
                }
            }
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';

                if (isset($_POST["form1"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.3.1</h4><p>$out</p></div>";
                }
                if (isset($_POST["form2"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.3.2</h4><p>$out</p></div>";
                }
                if (isset($_POST["form3"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.3.3</h4><p>$out</p></div>";
                }
                if (isset($_POST["form4"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.3.4</h4><p>$out</p></div>";
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