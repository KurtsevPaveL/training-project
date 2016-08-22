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
                <h4>OOP3.1.1</h4>
                <h5>Напишите программу, читающую строку длиной не меньше 10 символов. Выведите на экран 2 предпоследних символа в верхнем регистре.</h5>
                <form name="aform1" action="oop3.1action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form1">
                    <div>
                        <input name="string1" type="text"/><span>   Please enter string</span>
                    </div>
                    <input id="submit1" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP3.1.2</h4>
                <h5>Напишите программу, читающую строку произвольной длины. Выведите на экран зеркальное отображений строки в нижнем регистре.</h5>
                <form name="aform2" action="oop3action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form2">
                    <div>
                        <input name="string2" type="text"/><span>   Please enter string</span>
                    </div>
                    <input id="submit2" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP3.1.3</h4>
                <h5>Напишите программу, читающую две строки произвольной длины. Выведите на экран строки в формате “String2, String1”, так, чтобы первые символы были заглавными.</h5>
                <form name="aform3" action="oop3action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form3">
                    <div>
                        <input name="string3" type="text"/><span>   Please enter string 1</span>
                    </div>
                    <div>
                        <input name="string4" type="text"/><span>   Please enter string 2</span>
                    </div>
                    <input id="submit3" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP3.1.4</h4>
                <h5>Напишите программу, читающую строку произвольной длины. Выведите на экран строку, в которой все пробелы будут заменены символом ‘@’.</h5>
                <form name="aform4" action="oop3action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form4">
                    <div>
                        <input name="string5" type="text"/><span>   Please enter string</span>
                    </div>
                    <input id="submit4" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP3.1.5</h4>
                <h5>Напишите программу, читающую строку произвольной длины. Выведите на экран строку, в которой после каждого пробела будет добавлен символ ‘&’, и будут удалены все пробелы, стоящие до первого слова и после последнего.</h5>
                <form name="aform5" action="oop3action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form5">
                    <div>
                        <input name="string6" type="text"/><span>   Please enter string</span>
                    </div>
                    <input id="submit5" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP3.1.6</h4>
                <h5>Напишите программу, читающую строку произвольной длины. Выведите на экран количество символов в строке, если строка содержит сочетание символов “do”. Если не содержит, то вывести на экран исходную строку без первого и предпоследнего символа.</h5>
                <form name="aform6" action="oop3action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form6">
                    <div>
                        <input name="string7" type="text"/><span>   Please enter string</span>
                    </div>
                    <input id="submit6" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <!--
            You can test finished solutions using this link: http://entityz87.hol.es/oop.3.1.html
            The task was solved with the use of the resource: http://php.net/
            -->
        </div>
    </body>
</html>