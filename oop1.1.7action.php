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
    <?php
    //1.1.7==========================================================================================
    if (isset($_POST["form7"])) {
        $regfirstLastName = ($_POST["regfirstLastName"]);
        $regLogin = ($_POST["regLogin"]);
        $regPassword = ($_POST["regPassword"]);
        $regConfirmPassword = ($_POST["regConfirmPassword"]);
        $regEmail = ($_POST["regEmail"]);
        $regDateOfBirth = ($_POST["regDateOfBirth"]);
        //$gender = ($_POST["gender"]["checked"]);
        $regTextarea = ($_POST["regTextarea"]);
        //$regLicense = ($_POST["regLicense"]);
        $license = "<a href='#'>Here is the full text of license</a>";
        $myfileup = ($_FILES["myfile"]["name"]);

        if (isset($_FILES["myfile"])) { // Если файл существует
            $catalog = "upl"; // Наш каталог
            if (is_dir($catalog)) { // Если такой каталог есть
                $myfile = $_FILES["myfile"]["tmp_name"]; // Времменый файл
                $myfile_name = $_FILES["myfile"]["name"]; // Имя файла
                // $myfile_name_directory = $catalog.$myfile_name;
                if (!move_uploaded_file($myfile, $catalog . '/' . $myfile_name)) {
                    echo 'Ошибка при перемещении файла ' . $myfile_name;
                } // Если неудалось скопировать файл
            } else {
                mkdir('upl');
                echo ("Made catalog"); // Если такого каталога нет, то мы его создадим
            }
        }

        $regOutput2 = "<p> Welcome $regLogin</br>" .
                "Your fullname is $regfirstLastName</br>" .
                "Your password is $regPassword</br>" .
                "Your email is $regEmail</br>" .
                "Your date of bith is $regDateOfBirth</br>" .
                "You are $gender (m=male, f=female)</br>" .
                "Here is some additional information about yourself: <br>$regTextarea<br>" .
                "Bellow is the link with license <br> $license" .
                "</p>";
    }
    ?>
    <body>
        <div class="container">
            <?php
            require_once 'php/header.php';
            ?>
            <div class="jumbotron">
                <h4>OOP1.1.7</h4>
                <img class='img-circle' width='140px' height='140px' src='upl/<?php echo $myfileup; ?>'>
                <?php echo $regOutput2; ?>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE 10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>