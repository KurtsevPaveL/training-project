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
            require_once 'php/dbpass.php';
            $connect = mysqli_connect("$host", "$log", "$pass", "$db") or die('Не удалось соединиться: ' . mysql_error());
            $connect->set_charset("utf8");

            $query1 = "SELECT DISTINCT number_of_house FROM house";
            $res = $connect->query($query1) or die(mysqli_error("Nothing happen"));
            while ($res2 = mysqli_fetch_row($res)) {
                $options[] = $res2[0];
            }
            sort($options);

            $confirmApartment = filter_input(INPUT_POST, "confirmApartment");
            if (isset($confirmApartment)) {
                require_once 'classes/oop4advancedclasses/apartmentClass.php';
                //CREATING INSTANCE OF APARTMENTCLASS:
                $apartment = new ApartmentClass();
                $outPut = $apartment->info();
                //QUERY:
                $query2 = "INSERT INTO apartment (
                        number_of_house,
                        number_of_apartment,
                        room,
                        area,
                        floor,
                        resident,
                        number_balconies,
                        heating,
                        month_payment)
                    VALUES (
                        '{$apartment->houseNumber}',
                        '{$apartment->theNumberOfApartment}',
                        '{$apartment->room}',
                        '{$apartment->area}',
                        '{$apartment->floor}',
                        '{$apartment->numOfResidents}',
                        '{$apartment->numOfBalcony}',
                        '{$apartment->heating}',
                        '{$apartment->monthBills}'
                    )";
                if ($connect->query($query2) === TRUE) {
                    $q = "New record created successfully";
                } else {
                    $q = "Error: " . $query2 . "<br>" . $connect->error;
                }
            }
            mysqli_close($connect);
        ?>
        <div class="container">
            <?php
                require_once 'php/header.php';
            ?>
            <div class="jumbotron">
                <div>
                    <h4>OOP Task 4: Solution</h4>
                </div>
                <?php
                    require_once 'php/oop4php/addData.php';
                ?>
                <div class="fc">
                    <form name="aform1" action="oop4-1apartment.php" method="post" role="form" onsubmit="">
                        <input type=hidden name="form1">
                        <select name="houseNumber" class="sel">
                            <?php
                                for ($i = 0; $i < count($options); $i++) {
                                    echo "<option value=\"$options[$i]\">House $options[$i]</option>";
                                }
                            ?>
                        </select>
                        <span>The house number, which you want to add your apartment into</span>
                        <div>
                            <input name="apartmentNumber" type="text"/><span>   Please enter the apartment's number</span>
                        </div>
                        <div>
                            <input name="rooms" type="text"/><span>   Please enter the number of rooms</span>
                        </div>
                        <div>
                            <input name="area" type="text"/><span>   Please enter the apartment's area</span>
                        </div>
                        <div>
                            <input name="floor" type="text"/><span>   What floor is it located?</span>
                        </div>
                        <div>
                            <input name="numOfResidents" type="text"/><span>   Please enter the number of residents(Min 1)</span>
                        </div>
                        <div>
                            <input name="numOfBalcony" type="text"/><span>   How many balconies does it has?(If doesn't, enter "0")</span>
                        </div>
                        <div>
                            <input name="heating" type="text"/><span>   What type of heating does this flat use?(Common or personal)</span>
                        </div>
                        <input id="confirmApartment" name="confirmApartment" type="submit" value="Confirm"/>
                        <span style="color: red;">After you've filled all the fields!</span>
                    </form>
                </div>
                <?php
                    if (isset($confirmApartment)) {
                        echo "<div id=\"disp\"><div>$q<br><br>$outPut</div></div>";
                    }
                ?>
            </div>
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