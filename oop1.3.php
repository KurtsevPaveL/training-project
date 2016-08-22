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
                <h4>OOP1.3.1</h4>
                <h5>
                    Компания Lavin Interactive, разработчик пошаговой стратегии Losers-V, постоянно расширяет рынки сбыта и создаёт локализации своей игры даже на самые малоизвестные языки. В том числе, их заинтересовал язык племени австралийских аборигенов аниндилъяква.
                    Но в языке аниндилъяква нет числительных. Как же, например, перевести на него фразу «у вас семь чёрных драконов, а у вашего врага — сорок»? Локализаторы решили перевести её так: «у вас немного чёрных драконов, а у вашего врага — толпа». Они составили таблицу, в которой указали правила замены чисел, обозначающих количество монстров, на существительные и местоимения:
                    Количество Обозначение на русском языке Обозначение на языке аниндилъяква
                    от 1 до 4 несколько few
                    от 5 до 9 немного several
                    от 10 до 19 отряд pack
                    от 20 до 49 толпа lots
                    от 50 до 99 орда horde
                    от 100 до 249 множество throng
                    от 250 до 499 сонмище swarm
                    от 500 до 999 полчище zounds
                    от 1000 легион legion
                    Исходные данныеПомогите локализаторам автоматизировать процесс — напишите программу, которая по количеству монстров выдаст соответствующее этому количеству слово.
                    Исходные данные: В единственной строке записано целое число n (1 ≤ n ≤ 2000) — количество монстров.
                    Результат
                    Выведите слово, соответствующее данному количеству монстров на языке аниндилъяква. Примеры:
                    Искодные данные: 7 Результат: several
                    Искодные данные: 40 Результат: lots
                </h5>
                <form name="aform1" action="oop1.3action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form1">
                    <div>
                        <input name="number" type="text"/><span>   Please enter the number of monsters (between 1 and 2000). We will translate it to the Anynyldyakva language!</span>
                    </div>
                    <input id="submit1" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.3.2</h4>
                <h5>
                    У Дена есть два четырёхзначных кодовых замка для велосипеда. Каждый вечер он ставит велосипед на сигнализацию и пристёгивает к специальной стойке одним из замков. Ден никогда не использует один и тот же замок два вечера подряд. В некоторую ночь злоумышленник попытался с помощью кода 0000 открыть висящий на велосипеде замок. Сработала сигнализация, и вор поспешил скрыться. На следующую ночь он решил попробовать код 0001, затем 0002 и так далее в порядке возрастания номера.
                    Известно, что Ден не меняет кодов и в ночь, когда вор пришёл впервые, велосипед был пристёгнут первым замком.
                    Исходные данные
                    В первой строке записан код, установленный на первом замке, во второй строке — код, установленный на втором замке. Оба кода — строки длины 4, состоящие из цифр от 0 до 9.
                    Результат
                    Выведите «yes», если злоумышленник рано или поздно взломает замок, и «no» в противном случае.
                    Примеры: Искодные данные: 0001 0000 Результат: no
                    Примеры: Искодные данные: 0002 0001 Результат: yes
                </h5>
                <form name="aform2" action="oop1.3action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form2">
                    <div>
                        <input name="pin1" type="text"/><span>   Please enter the first pin</span>
                    </div>
                    <div>
                        <input name="pin2" type="text"/><span>   Please enter the second pin</span>
                    </div>
                    <input id="submit2" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.3.3</h4>
                <h5>
                    Вася и Петя учатся в школе в одном классе.
                    Недавно Петя поведал Васе о хитром способе возведения в квадрат натуральных чисел, оканчивающихся на цифру 5.
                    Теперь Вася может с легкостью возводить в квадрат двузначные (и даже некоторые трехзначные) числа, оканчивающиеся на 5.
                    Способ заключается в следующем: для возведения в квадрат числа, оканчивающегося на 5 достаточно умножить число, полученное из исходного вычеркиванием последней пятерки на следующее по порядку число, затем остается лишь приписать «25» к получившемуся результату справа.
                    Например, для того, чтобы возвести число 125 в квадрат достаточно 12 умножить на 13 и приписать 25, т.е. приписывая к числу 12*13=156 число 25, получаем результат 15625, т.е. 1252=15625.
                    Напишите программу, возводящую число, оканчивающееся на 5, в квадрат для того, чтобы Вася смог проверить свои навыки.
                    Исходные данные.
                    В единственной строке записано одно натуральное число А, оканчивающееся на цифру 5, не превышающее 4*10^5.
                    Результат
                    Выведите одно натуральное число - A2 без лидирующих нулей.
                    Примеры: исходные данные: 5 результат 25
                    Примеры: исходные данные: 75 результат 5625
                    Примеры: исходные данные: 4255 результат 18105025
                </h5>
                <form name="aform3" action="oop1.3action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form3">
                    <div>
                        <input name="numJustin" type="text"/><span>   Please enter a number which multiple of 5, which Putin want to count!</span>
                    </div>
                    <input id="submit3" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.3.4</h4>
                <h5>
                    Витя работает недалеко от одной из станций кольцевой линии метро, а живет рядом с другой станцией той же линии. Требуется выяснить, мимо какого наименьшего количества промежуточных станций необходимо проехать Вите по кольцу, чтобы добраться с работы домой.
                    Исходные данные
                    Заданы три числа: сначала N – общее количество станций кольцевой линии, а затем i и j – номера станции, на которой Витя садится, и станции, на которой он должен выйти. Станции пронумерованы подряд натуральными числами 1, 2, 3, …, N (1-я станция – соседняя с N-й), N не превосходит 100. Числа i и j не совпадают.
                    Результат
                    Требуется вывести минимальное количество промежуточных станций (не считая станции посадки и высадки), которые необходимо проехать Вите.
                    Примеры: исходные данные: 100 5 6 результат: 0
                    Примеры: исходные данные: 10 1 9 результат: 1
                </h5>
                <form name="aform4" action="oop1.3action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form4">
                    <div>
                        <input name="home" type="text"/><span>   Please enter the homestation number (Between 0 and 100)</span>
                    </div>
                    <div>
                        <input name="work" type="text"/><span>   Please enter the workstation number (Between 0 and 100)</span>
                    </div>
                    <div>
                        <input name="subwayLine" type="text"/><span>   Please enter the quantity of stations on Subway line (Between 0 and 100)</span>
                    </div>
                    <input id="submit4" type="submit" value="Go!"/>
                </form>
            </div>
        </div>
    </body>
</html>