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
        <div class="container">
            <?php
                require_once 'php/header.php';
            ?>
            <div class="jumbotron">
                <h1>Some studied PHP5 features!</h1>
                <ol>
                    <l>$array = explode("," , $string); - Makes an array of strings</l><br>
                    <l>$string = implode (",", $array); - Makes a string of arrays</l><br>
                    <l>$array = array_push($array, $value); - Pushes the $value in the end of $array</l><br>
                    <l> $array = array_chunk($arr, 10); - Divides the array into pieces of 10 stuff </l><br>
                    <l>$array = array_diff($arr,$arrD); - Computes the difference of arrays</l><br>
                    <l>$array = array_intersect($arr, $arrLastElem); - Computes the intersection of arrays</l><br>
                    <l>$arrRev = array_reverse($arr); - </l><br>
                    <l>$arrPositive = array_filter($arr, "nameOfCallbackFunction"); - Filters elements of an array using a callback function</l><br>
                    <l>$arr = array_fill(0, 100, "banana"); -  Fill an array with values</l><br>
                    <l>sort($arr, SORT_NUMERIC); - Sort an array</l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                    <l></l><br>
                </ol>
            </div>
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


