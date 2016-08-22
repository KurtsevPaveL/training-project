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
                <h4>OOP Task 4</h4>
                <h5>Задача 1. Создайте класс, описывающий квартиру в жилом доме. В качестве примеров полей используйте количество комнат, площадь, этаж, количество жильцов, наличие балконов и их количество, тип отопления и т.д. Реализуйте методы, которые:
                    - производят расчет коммунальных услуг в зависимости от количества жильцов или площади квартиры (каждая услуга отдельно);
                    - рассчитывает сумму месячного платежа за все коммунальные услуги за месяц;
                    - добавляет и удаляет жильцов
                    - выводит информацию о квартире.
                </h5>
                <h5> Задача 2. Создайте класс, описывающий жилой многоэтажный дом, состоящий из квартир.
                    Используйте класс квартиры из предыдущего задания.
                    В качестве примеров полей используйте номер дома, количество этажей, количество подъездов, квартиры, площади прилегающей территории и т.д.
                    Реализуйте методы, которые:
                    - рассчитывает размер коммунальных платежей со всех квартир в этом доме;
                    - рассчитывает объем потребляемого электричества для освещения подъездов в зависимости от количества подъездов и этажей;
                    - рассчитывает размер налога на землю в зависимости от размера терртории, отведенной для дома;
                    - выводит информацию о доме.
                    Примечание.
                    Квартиры в одном доме удобнее всего хранить в массиве переменных.
                </h5>
                <h5>
                    Задача 3. Создайте класс, описывающий улицу в населенном пункте. Используйте класс дом из предыдущего задания. В качестве примеров полей используйте название улицы, ее протяженность, координаты начала и конца, дома и т.д. Реализуйте методы, которые:
                    - рассчитывает количество дворников, которое необходимо для уборки прилегающих территорий всех домов по улице в зависимости от площади этих территорий;
                    - рассчитывает объем коммунальных платежей, которые будут получены со всех домов;
                    - выводит информацию об улице.
                </h5>
                <h5>
                    Задача 4. Создайте класс, описывающий населенный пункт. В качестве примеров полей используйте название населенного пункта, год основания, географические координаты и т.д. Реализуйте методы, которые:
                    - рассчитывает бюджет населенного пункта в зависимости от размера налога на землю, полученного со всех домов;
                    - рассчитывает количество населения, проживающего в населенном пункте;
                    - выводит информацию о населенном пункте.
                </h5>
                <h5>
                    Задача 5. Создайте тестовую программу для проверки работоспособности вышеуказанных классов.
                </h5>
                <form name="aform1" action="oop4action.php" method="post" role="form" onsubmit="">
                    <input id="submit1" type="submit" value="Solve exercise!"/>
                </form>
            </div>
        </div>
    </body>
</html>