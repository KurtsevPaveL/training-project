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
            //2.1.1==========================================================================================
            if (isset($_POST["form1"])) {
                $str = $_POST["string"];
                $arr = explode(",", $str);
                $arrRev = array_reverse($arr);
                $strFinal = implode(",", $arrRev);
                $outPut = "You've entered an array: \"$str\". We replaced its values inside: \"$strFinal\"";
            }
            //2.1.2==========================================================================================
            if (isset($_POST["form2"])) {
                for ($i = 0; $i < 100; $i++) {
                    $arr[$i] = mt_rand(0, 100);
                }
                $str = "";
                $arrayChunk = array_chunk($arr, 10);
                for ($i = 0; $i < count($arrayChunk); $i++) {
                    $j = $i + 1;
                    $str.= "Piece \"$j\" is \"" . implode(" ", $arrayChunk[$i]) . "\"<br>";
                }
                $outPut = "<p>We filled array. And we and we have divided it on 10 pieces <br> $str</p>";
            }
            //2.1.3==========================================================================================
            if (isset($_POST["form3"])) {
                for ($i = 0; $i < 50; $i++) {
                    $arr[$i] = mt_rand(0, 10);
                }
                $arrLastElem[] = $arr[49];
                $arrDif = array_diff($arr, $arrLastElem);
                $arrInter = array_intersect($arr, $arrLastElem);
                $outPut = "The number of elements different from the latest in this array is " . count($arrDif) . "<br>"
                    . "The last item is $arrLastElem[0] and it has " . count($arrInter) . " repeats in our array bellow:<br>"
                    . "\"" . implode(",", $arr) . "\"<br>";
            }
            //2.1.4==========================================================================================
            if (isset($_POST["form4"])) {
                for ($i = 0; $i < 20; $i++) {
                    $arr[$i] = mt_rand(-5, 10);
                }

                function positive($var) {
                    if ($var >= 0) {
                        return $var;
                    }
                }

                function negative($var) {
                    if ($var < 0) {
                        return $var;
                    }
                }

                $arrPositive = array_filter($arr, "positive");
                $arrNegative = array_filter($arr, "negative");
                $outPut = "We filled an array within 20 elements with numbers between -5 and 10 and we filtered it:<br>"
                    . "the positive elements of array are: " . implode(",", $arrPositive) . "<br>"
                    . "the negative elements of array are: " . implode(",", $arrNegative);
            }
            //2.1.5==========================================================================================
            if (isset($_POST["form5"])) {
                for ($i = 0; $i < 10; $i++) {
                    $arr[$i] = mt_rand(-5, 5);
                }
                sort($arr, SORT_NUMERIC);
                $smallest = $arr[0];
                $biggest = $arr[count($arr) - 1];
                $outPut = "The smallest element of an array is \"$smallest\" and the biggest is \"$biggest\"";
            }
            //2.1.6==========================================================================================
            if (isset($_POST["form6"])) {
                $length = $depth = 10;
                $table = "<table border=\"3px\">";
                for ($i = 0; $i < $length; $i++) {
                    $table .= "<tr>";
                    for ($j = 0; $j < $depth; $j++) {
                        $table.="<td width=\"15\" heigth=\"15\" align=\"center\">";
                        $arr[$i][$j] = rand(-50, 50);
                        $table.= $arr[$i][$j];
                        $table.="</td>";
                    }
                    $table .= "</tr>";
                }
                $elemMax = -50;
                for ($i = 0; $i < $length; $i++) {
                    if ($arr[$i][$i] > $elemMax) {
                        $elemMax = $arr[$i][$i];
                    }
                }
                $elemMin = 50;
                for ($i = $length - 1, $j = 0; $i >= 0; $i--, $j++) {
                    if ($arr[$i][$j] < $elemMin) {
                        $elemMin = $arr[$i][$j];
                    }
                }
                $outPut = "<div>$table</div>" . "The maximal element of the main diagonal is $elemMax <br>"
                    . "The minimal element of the secondary diagonal. is $elemMin";
            }
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';

                if (isset($_POST["form1"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP2.2.1 </h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form2"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP2.1.2</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form3"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP2.1.3</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form4"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP2.1.4</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form5"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP2.1.5</h4><p>$outPut</p></div>";
                }
                if (isset($_POST["form6"])) {
                    echo "<div class=\"jumbotron\"><h4>OOP2.1.6</h4><p>$outPut</p></div>";
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