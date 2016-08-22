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
            //3.1.1==========================================================================================
            $form1 = filter_input(INPUT_POST, "form1");
            if (isset($form1)) {
                mb_internal_encoding("UTF-8");
                $string = filter_input(INPUT_POST, "string1");
                $strLength = mb_strlen($string);
                if ($strLength > 10) {
                    $lastTwo = mb_strtoupper(mb_substr($string, ($strLength - 2)));
                    $outPut = "Your string has \"$strLength\" characters, we took last two and made them to upper case: \"$lastTwo\"";
                } else {
                    $outPut = "Sorry, your have entered too short string";
                }
            }
            //3.1.2==========================================================================================
            $form2 = filter_input(INPUT_POST, "form2");
            if (isset($form2)) {
                mb_internal_encoding("UTF-8");
                $string = filter_input(INPUT_POST, "string2");
                $strLength = mb_strlen($string);
                $stringRevLowerCase = mb_strtolower(strrev($string));
                $outPut = "You've entered :\"$string\"<br>"
                    . "We've changed it to :\"$stringRevLowerCase\"";
            }
            //3.1.3==========================================================================================
            $form3 = filter_input(INPUT_POST, "form3");
            if (isset($form3)) {
                mb_internal_encoding("UTF-8");
                $string1 = filter_input(INPUT_POST, "string3");
                $string2 = filter_input(INPUT_POST, "string4");
                $string1 = mb_strtoupper(mb_substr($string1, 0, 1)) . mb_substr($string1, 1);
                $string2 = mb_strtoupper(mb_substr($string2, 0, 1)) . mb_substr($string2, 1);
                $outPut = $string1 . ", " . $string2;
            }
            //3.1.4==========================================================================================
            $form4 = filter_input(INPUT_POST, "form4");
            if (isset($form4)) {
                $string = filter_input(INPUT_POST, "string5");
                $stringRepl = str_replace(" ", "@", $string);
                $outPut = "You've entered:<br>$string<br> We've changed it to:<br>$stringRepl";
            }
            //3.1.5==========================================================================================
            $form5 = filter_input(INPUT_POST, "form5");
            if (isset($form5)) {
                $string = filter_input(INPUT_POST, "string6");
                $stringAmpSpaces = str_replace(" ", ' &', trim($string));
                $outPut = "You've entered string below:<br>\"$string\"<br>"
                    . "We've filtered it, and got this:<br>\"$stringAmpSpaces\"";
            }
            //3.1.6==========================================================================================
            $form6 = filter_input(INPUT_POST, "form6");
            if (isset($form6)) {
                mb_internal_encoding("UTF-8");
                $string = filter_input(INPUT_POST, "string7");
                $do = strpos($string, "do");
                if ($do > -1) {
                    $outPut = "We found \"do\" in your string! So we counted number of symbols in it. It is : " . iconv_strlen($string);
                } else {
                    $stringStart = mb_substr($string, 1, -2);
                    $stringBefLast = mb_substr($string, -1);
                    $stringFull = $stringStart . $stringBefLast;
                    $outPut = "We haven't found the \"do\" in your string!"
                        . "<br> Your string is:<br>" . "\"$string\""
                        . "<br> Without first and before the last symbols: <br>" . "\"$stringFull\"";
                }
            }
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';

                if (isset($form1)) {
                    echo "<div class=\"jumbotron\"><h4>OOP3.1.1 </h4><p>$outPut</p></div>";
                }
                if (isset($form2)) {
                    echo "<div class=\"jumbotron\"><h4>OOP3.1.2 </h4><p>$outPut</p></div>";
                }
                if (isset($form3)) {
                    echo "<div class=\"jumbotron\"><h4>OOP3.1.3 </h4><p>$outPut</p></div>";
                }
                if (isset($form4)) {
                    echo "<div class=\"jumbotron\"><h4>OOP3.1.4 </h4><p>$outPut</p></div>";
                }
                if (isset($form5)) {
                    echo "<div class=\"jumbotron\"><h4>OOP3.1.5 </h4><p>$outPut</p></div>";
                }
                if (isset($form6)) {
                    echo "<div class=\"jumbotron\"><h4>OOP3.1.6 </h4><p>$outPut</p></div>";
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