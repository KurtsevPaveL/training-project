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
                <h4>OOP1.1.1</h4>
                <h5>Напишите программу, которая получает два числа, производит их суммирование и выводит на экран результат.</h5>
                <form name="aform1" action="oop1.1action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form1">
                    <div>
                        <input name="number1" type="text"/><span>   Please enter the first number</span>
                    </div>
                    <div>
                        <input name="number2" type="text"/><span>   Please enter the second number</span>
                    </div>
                    <input id="submit1" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.1.2</h4>
                <h5>Вычислить площадь равностороннего треугольника по формуле S=1/4*a*(Корень из трех) , где а- сторона треугольника.</h5>
                <form name="aform2" action="oop1.1action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form2">
                    <div>
                        <input name="sideTriangle" type="text"/><span>   Please enter the length of the triangles side</span>
                    </div>
                    <input id="submit2" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.1.3</h4>
                <h5>Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.
                    Исходные данные: Пройденный путь - S; Время движения - t.
                    Представить решение задачи с помощью одной функции.
                </h5>
                <form name="aform3" action="oop1.1action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form3">
                    <div>
                        <input name="distance" type="text"/><span>   Please enter the distance traveled</span><br>
                    </div>
                    <div>
                        <input name="time" type="text"/><span>   Please enter the time traveled</span>
                    </div>
                    <input id="submit3" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.1.4</h4>
                <h5>Разработать функцию вычисления факториала заданного числа (n!)
                    Исходные данные, передаваемые в функцию: n - число, факториал которого вычисляется.
                    На выходе получить результат в виде факториала числа.
                </h5>
                <form name="aform4" action="oop1.1action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form4">
                    <div>
                        <input name="numberInF" type="text"/><span>   Please enter number. We will count its factorial</span><br>
                    </div>
                    <input id="submit4" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.1.5</h4>
                <h5>Сделать функцию, которая бы возводила любое число в любую степень.</h5>
                <form name="aform5" action="oop1.1action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form5">
                    <div>
                        <input name="numberInR" type="text"/><span>   Please enter number you want to count</span><br>
                    </div>
                    <div>
                        <input name="numberInRaise" type="text"/><span>   Please enter number you want to count</span><br>
                    </div>
                    <input id="submit5" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.1.6</h4>
                <h5>Есть переменная $text. Надо подсчитать и вывести количество букв а, б и ы в этом тексте.</h5>
                <form name="aform6" action="oop1.1action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form6">
                    <div>
                        <textarea name="textarea"  rows="4" cols="40">example example example example bbb</textarea>
                    </div>
                    <div><span>   Please enter any text you want, we will find out how many letters"a" and "b" in it</span></div>
                    <input id="submit6" type="submit" value="Go!"/>
                </form>
            </div>
            <div class="jumbotron">
                <h4>OOP1.1.7</h4>
                <h5>Создать форму регистрации пользователя с полями: ФИО, логин, пароль, почта, дата рождения, пол(radio), лицензионное соглашение(checkbox), о себе(textarea), выбор языка(выпадающий список), загрузка картинки аватара, кнопки reset и submit.
                    Результат: при нажатии на кнопку submit сервер возвращает страницу с введенными данными.</h5>
                <form enctype="multipart/form-data" name="aform7" action="oop1.1.7action.php" method="post" role="form" onsubmit="//return confirm('Are you really want to submit?')">
                    <input type=hidden name="form7">
                    <span>Welcome! Here you may register. Please fill out all the fields bellow:</span>
                    <div>
                        <span>Please select your language</span>
                        <select name ="language">
                            <option selected value="English">English</option>
                            <option value="Russian">Русский</option>
                            <option value="Ukrainian">Українська</option>
                        </select>
                    </div>
                    <div>
                        <input name="regfirstLastName" type="text"/><span>   Please enter your first and lastname</span><br>
                    </div>
                    <div>
                        <input name="regLogin" type="text"/><span>   Please enter your login</span><br>
                    </div>
                    <div>
                        <input name="regPassword" type="password"/><span>   Please enter your password</span><br>
                    </div>
                    <div>
                        <input name="regConfirmPassword" type="password"/><span>   Please confirm your password</span><br>
                    </div>
                    <div>
                        <input name="regEmail" type="text"/><span>   Please enter your email</span><br>
                    </div>
                    <div>
                        <input name="regDateOfBirth" type="text"/><span>   Please enter your date of birth</span><br>
                    </div>
                    <div>
                        <span>   Please select your gender: </span><br>
                        <input name="gender" type="radio" value="male"/><span>  Male</span><br>
                        <input name="gender" type="radio" value="female"/><span>   Female</span><br>
                    </div>
                    <div>
                        <textarea name="regTextarea"  rows="4" cols="40"></textarea>
                    </div>
                    <div><span>   You may write some additional information about yourself, at the top!</span></div>
                    <div>
                        <span>   Upload an avatar below</span><input name="myfile" type="file">
                    </div>
                    <div>
                        <input id="regReset" type="reset" value="Clear all fields"/>
                        <div>
                            <input name="regLicense" type="checkbox"/><span>   "I agree with license terms!"</span><br>
                        </div>
                        <input id="submit7" type="submit" value="________Sign Up!________"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>