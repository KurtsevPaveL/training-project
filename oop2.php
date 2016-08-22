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
                <h4>OOP2.1.1</h4>
                <h5>Напишите программу, читающую массив из 10 чисел и печатающий его в обратном порядке.</h5>
                <form name="aform1" action="oop2action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form1">
                    <div>
                        <input name="string" type="text"/><span>   Please enter array's elements separated by commas (Example: 1,2,3,4,5,6,7,8,9,10)</span>
                    </div>
                    <input id="submit1" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP2.1.2</h4>
                <h5>Дан массив из 100 чисел. Заполнить его случайными значениями и распечатать его по 10 чисел в строке.</h5>
                <form name="aform2" action="oop2action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form2">
                    <div>
                        <span>We'll fill the array after you click "Solve exercise!". And then we'll show you what do we got</span>
                    </div>
                    <input id="submit2" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP2.1.3</h4>
                <h5>Дан массив из 50 чисел. Заполните его случайными числами от 1го до 10. Определить, сколько в нем элементов, отличных от последнего элемента. Вывести их количество.</h5>
                <form name="aform3" action="oop2action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form3">
                    <div>
                        <span>We'll fill the array within 50 elements, after you click "Solve exercise!". And then we'll show you what do we got</span>
                    </div>
                    <input id="submit3" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP2.1.4</h4>
                <h5>Дан массив из 20 чисел. Заполните его случайными числами от -5 до 10. Вывести на экран сначала все положительные его элементы, а затем все отрицательные.</h5>
                <form name="aform4" action="oop2action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form4">
                    <div>
                        <span>We'll fill the array within 20 elements, after you click "Solve exercise!". And then we'll show you what do we got</span>
                    </div>
                    <input id="submit4" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP2.1.5</h4>
                <h5>Дан массив из 10 чисел. Заполните его случайными числами от -5 до 5. Вывести на экран сначала максимальный элемент, а затем минимальный. </h5>
                <form name="aform5" action="oop2action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form5">
                    <div>
                        <span>We'll fill the array within 10 elements, after you click "Solve exercise!". And then we'll show you what do we got</span>
                    </div>
                    <input id="submit5" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP2.1.6</h4>
                <h5>Дан двумерный массив размерностью (n = m). Заполните его случайными числами от -50 до 50. Вывести сначала максимальный элемент главной диагонали, а затем минимальный элемент побочной диагонали</h5>
                <form name="aform6" action="oop2action.php" method="post" role="form" onsubmit="">
                    <input type=hidden name="form6">
                    <div>
                        <span>We have an array filled with other arrays. Press "Solve exercise!". We'll show you what do we got</span>
                    </div>
                    <input id="submit6" type="submit" value="Solve exercise!"/>
                </form>
            </div>
            <!--
            You can test finished solutions using this link: http://entityz87.hol.es/oop.2.1.html
            The task was solved with the use of the resource http://php.net/
            -->
        </div>
    </body>
</html>