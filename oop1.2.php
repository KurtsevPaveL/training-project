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
                <h4>OOP1.2.1</h4>
                <h5>Напишите программу, которая при заданном положительном целом числе N (вводится с клавиатуры) вычисляет сумму чисел от 1 до N.</h5>
                <form name="aform1" action="oop1.2action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form1">
                    <div>
                        <input name="numberSum" type="text"/><span>   Please enter the number</span>
                    </div>
                    <input id="submit1" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.2.2</h4>
                <h5>Составьте программу, которая вычисляет наибольший общий делитель (НОД) двух чисел, используя алгоритм Евклида.
                    Алгоритм Евклида:
                    1. Вычислим r - остаток от деления числа a на b, a = bq+r, 0 <= r < b.
                    2. Если r = 0, то b есть искомое число.
                    3. Если r != 0, то заменим пару чисел (a,b) парой (b,r)
                    и перейдем к шагу 1.
                </h5>
                <form name="aform2" action="oop1.2action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form2">
                    <div>
                        <input name="number2a1" type="text"/><span>   Please enter the number 1</span>
                    </div>
                    <div>
                        <input name="number2a2" type="text"/><span>   Please enter the number 2</span>
                    </div>
                    <input id="submit2" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.2.3</h4>
                <h5>Театральная площадь. Театральная площадь в столице Берляндии представляет собой прямоугольник n × m метров .
                    По случаю очередного юбилея города, было принято решение о замощении площади квадратными гранитными плитами.
                    Каждая плита имеет размер a × a.
                    Какое наименьшее количество плит понадобиться для замощения площади? Разрешено покрыть плитами большую поверхность, чем театральная площадь, но она должна быть покрыта обязательно. Гранитные плиты нельзя ломать или дробить, а разрешено использовать только целиком.
                    Границы плит должны быть параллельны границам площади.
                    Исходные данные
                    Вводятся три целых натуральных числа n, m и a (1 ≤ n, m, a ≤ 109).
                    Результат: Выведите искомое количество плит.
                    Примеры: Вводные данные: 6 6 4 Результат = 4.
                </h5>
                <form name="aform3" action="oop1.2action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form3">
                    <div>
                        <input name="areaLength" type="text"/><span>   Please enter the areas length</span>
                    </div>
                    <div>
                        <input name="areaWidth" type="text"/><span>   Please enter the areas side width</span>
                    </div>
                    <div>
                        <input name="plateLength" type="text"/><span>   Please enter the length of granit plate side</span>
                    </div>
                    <input id="submit3" type="submit" value="Go!"/>
                </form>
            </div>
        </div>
    </body>
</html>