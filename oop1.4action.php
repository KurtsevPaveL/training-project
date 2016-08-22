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
            //1.4.1==========================================================================================
            if (isset($_POST["form1"])) {
                $departureTime = $_POST["departureTime"];
                $travelTime = $_POST["travelTime"];
                $t1Hr = substr($departureTime, 0, -3);
                $t1Min = substr($departureTime, 3);
                $t2Hr = substr($travelTime, 0, -3);
                $t2Min = substr($travelTime, 3);
                $finalHour = $t1Hr + $t2Hr;
                if ($finalHour > 23) {
                    $finalHour = $t1Hr + $t2Hr - 24;
                    if ($finalHour < 10) {
                        $finalHour = "0" . $finalHour;
                    }
                }
                $finalMinute = $t1Min + $t2Min;
                if ($finalMinute > 59) {
                    $finalHour = "0" . $finalHour + 1;
                    if ($finalHour < 10) {
                        $finalHour = "0" . $finalHour;
                        $finalMinute -= 60;
                    }
                    $finalMinute = $t1Min + $t2Min - 60;
                    if ($finalMinute < 10) {
                        $finalMinute = "0" . $finalMinute;
                    }
                }
                $finalTime = "$finalHour:$finalMinute";
                $outPut = "Departure time is \"$departureTime\". Travel time is \"$travelTime\". Train arrival at \"$finalTime\" ";
            }
            //1.4.2==========================================================================================
            if (isset($_POST["form2"])) {
                $ticket = $_POST["ticket"];
                if ($ticket < 1000000) {
                    $ticketStr = "$ticket";
                    $ticketArr = [];
                    for ($i = 0; $i < 6; $i++) {
                        $ticketArr[$i] = $ticketStr[$i];
                    }
                    $happyNum1 = $ticketArr[0] + $ticketArr[1] + $ticketArr[2];
                    $happyNum2 = $ticketArr[3] + $ticketArr[4] + $ticketArr[5];
                    if ($happyNum1 == $happyNum2) {
                        $outPut = "Congratulations! Your ticket \"$ticket\" is lucky one!";
                    } else {
                        $outPut = "We're sad to say, but your ticket \"$ticket\" isn't a lucky one";
                    }
                }
            }
            //1.4.3==========================================================================================
            if (isset($_POST["form3"])) {
                $sequence = $_POST["sequence"];
                $arr = explode(" ", $sequence);
                $a = $arr[0];
                $b = $arr[1];
                $c = $arr[2];
                $d = $b - $a;
                $e = $c * $d + $a;
                $outPut = "Required element with index \"$c\" equal \"$e\"";
            }
            //1.4.4==========================================================================================
            if (isset($_POST["espresso"])) {
                $outPut = "Please take your Espresso! It's energize you!" . "<img class='img-circle' width='140px' height='140px'  src='img/coffee.jpg'>";
            }
            if (isset($_POST["americano"])) {
                $outPut = "Please take your Americano! Carefully, it's hot!" . "<img class='img-circle' width='140px' height='140px'  src='img/coffee.jpg'>";
            }
            if (isset($_POST["cofMilk"])) {
                $outPut = "Please take your Coffee with milk! It's tasty!" . "<img class='img-circle' width='140px' height='140px'  src='img/coffee.jpg'>";
            }
            if (isset($_POST["capuccino"])) {
                $outPut = "Please take your Capuccino! Delicious!" . "<img class='img-circle' width='140px' height='140px'  src='img/coffee.jpg'>";
            }
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';

                if (isset($_POST["form1"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.1</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form2"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.2</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form3"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.3</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["espresso"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.4</h4><p>$outPut</p></div>";
                }

                if (isset($_POST["americano"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.4</h4><p>$outPut</p></div>";
                }

                if (isset($_POST["cofMilk"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.4</h4><p>$outPut</p></div>";
                }

                if (isset($_POST["capuccino"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP1.4.4</h4><p>$outPut</p></div>";
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