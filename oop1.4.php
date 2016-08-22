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
                <h4>OOP1.4.1</h4>
                <h5>
                    Задано время отправления поезда и время в пути до конечной станции. Требуется написать программу, которая найдет время прибытия этого поезда (возможно, в другие сутки).
                    Исходные данные
                    Содержит две строки. В первой строке задано время отправления, а во второй строке – время в пути.
                    Время отправления задается в формате «HH:MM», где HH время в часах, которое принимает значение от 00 до 23, ММ – время в минутах, которое принимает значение от 00 до 59.
                    Время в пути задается двумя неотрицательными целыми числами – количество часов и количество минут.
                    Числа разделяются одним пробелом. Количество часов не превышает 120, минут – 59.
                    Результат
                    Содержит одну строку – время прибытия поезда на конечную станцию.
                    Примеры: исходные данные 00:00, 10:10 результат: 10:10
                    Примеры: исходные данные 01:02, 04:06 результат: 05:08
                    Формат результата должен быть HH:MM
                </h5>
                <form name="aform1" action="oop1.4action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form1">
                    <div>
                        <input name="departureTime" type="text"/><span>   Please enter the departure time of the train (Format "HH:MM")</span>
                    </div>
                    <div>
                        <input name="travelTime" type="text"/><span>   Please enter the travel time (Format "HH:MM")</span>
                    </div>
                    <input id="submit1" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.4.2</h4>
                <h5>
                    Вы пользуетесь общественным транспортом? Вероятно, вы расплачивались за проезд и получали билет с номером. Счастливым билетом называют такой билет с шестизначным номером, где сумма первых трех цифр равна сумме последних трех. Т.е. билет с номером 385916 – счастливый, т.к. 3+8+5=9+1+6. Вам требуется написать программу, которая проверяет счастливость билета.
                    Исходные данные
                    Содержит одно целое число N (0 ≤ N < 10^6).
                    Результат
                    Нужно вывести «YES», если билет с номером N счастливый и «NO» в противном случае.
                    Примеры: исходные данные: 385916 результат: YES
                    Примеры: исходные данные: 123456 результат: NO
                </h5>
                <form name="aform2" action="oop1.4action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form2">
                    <div>
                        <input name="ticket" type="text"/><span>   Please enter the number of your ticket (Format "123456")</span>
                    </div>
                    <input id="submit2" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.4.3</h4>
                <h5>
                    Заданы первый и второй элементы арифметической прогрессии. Требуется написать программу, которая вычислит элемент прогрессии по ее номеру.
                    Исходные данные
                    содержит три целых числа, разделенных пробелами – первый элемент прогрессии A1 (1 ≤ A1 ≤ 1000), второй элемент прогрессии A2 (1 ≤ A2 ≤ 1000), и номер требуемого элемента N (1 ≤ N ≤ 1000).
                    Результат
                    Содержит одно целое число - N-й элемент арифметической прогрессии.
                    Пример: исходные данные: 1 5 3 результат: 9
                    Пяснения к примеру:
                    Здесь речь идет о следующей последовательности чисел:
                    1, 5, 9, 13, 17, 21, …
                    В данной последовательности D=4, поэтому A1=1, A2=A1+D=5, A3=A1+2*D=9, и т.д. Поскольку нам нужно было найти 3й элемент прогрессии, то ответом на задачу является число 9.
                </h5>
                <form name="aform3" action="oop1.4action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form3">
                    <div>
                        <input name="sequence" type="text"/><span>   Please enter the numbers of arithmetic sequence (Format "a b c" a-first number, b-second number, c - index of number of arithmetic sequence ([0]=>a , [1]=>b... [c]=> x. Every number must be between 0 and 1000)</span>
                    </div>
                    <input id="submit3" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.4.4</h4>
                <h5>
                    Напишите программу, реализующую алгоритм работы кофейного автомата.
                </h5>
                <div id="machine" class="machine">
                    <div id="items" class="items">
                        <div id="item1" class="item">
                            <div class="itemName">
                                Coffee<br>espresso
                            </div>
                            <div class="itemSpec">
                                Grain<br>60ml.
                            </div>
                            <div class="itemPrice">
                                20
                            </div>
                        </div>
                        <div id="item2" class="item">
                            <div class="itemName" >
                                Coffee<br>americano
                            </div>
                            <div class="itemSpec">
                                Grain<br>150ml.
                            </div>
                            <div class="itemPrice">
                                20
                            </div>
                        </div>
                        <div id="item3" class="item">
                            <div class="itemName" >
                                Coffee<br>with milk
                            </div>
                            <div class="itemSpec">
                                Grain<br>150ml.
                            </div>
                            <div class="itemPrice">
                                20
                            </div>
                        </div>
                        <div id="item4" class="item">
                            <div class="itemName">
                                Coffee<br>capuccino
                            </div>
                            <div class="itemSpec">
                                Grain<br>150ml.
                            </div>
                            <div class="itemPrice">
                                25
                            </div>
                        </div>
                    </div>
                    <div id="button1" class="button" onclick="">
                        <form name="aform4" action="oop1.4action.php" method="post" role="form" onsubmit="return confirm('Are you really want Espresso?')">
                            <input type=hidden name="espresso">
                            <input id="submit4" class="buttonSub" type="submit" value="Order!"/>
                        </form>
                    </div>
                    <div id="button2" class="button" onclick="">
                        <form name="aform5" action="oop1.4action.php" method="post" role="form" onsubmit="return confirm('Are you really want Americano?')">
                            <input type=hidden name="americano">
                            <input id="submit5" class="buttonSub" type="submit" value="Order!"/>
                        </form>
                    </div>
                    <div id="button3" class="button" onclick="">
                        <form name="aform6" action="oop1.4action.php" method="post" role="form" onsubmit="return confirm('Are you really want Coffee with milk?')">
                            <input type=hidden name="cofMilk">
                            <input id="submit6" class="buttonSub" type="submit" value="Order!"/>
                        </form>
                    </div>
                    <div id="button4" class="button" onclick="">
                        <form name="aform7" action="oop1.4action.php" method="post" role="form" onsubmit="return confirm('Are you really want Capuccino?')">
                            <input type=hidden name="capuccino">
                            <input id="submit7" class="buttonSub" type="submit" value="Order!"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>