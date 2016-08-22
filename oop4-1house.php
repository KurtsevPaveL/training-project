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
            //SHOWS ERRORS
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            //CONNECTS DB
            require_once 'php/dbpass.php';
            $connect = mysqli_connect("$host", "$log", "$pass", "$db") or die('Не удалось соединиться: ' . mysql_error());
            $connect->set_charset("utf8");
            //GET STREET NAMES FROM DB
            $query1 = "SELECT DISTINCT street_name FROM street";
            $res = $connect->query($query1) or die(mysqli_error("Nothing happen"));
            while ($res2 = mysqli_fetch_row($res)) {
                $options[] = $res2[0];
            }
            sort($options);
            //ADD DATA INTO DB
            $confirmHouse = filter_input(INPUT_POST, "confirmHouse");
            if (isset($confirmHouse)) {
                require_once 'classes/houseClass.php';
                //CREATING INSTANCE OF APARTMENTCLASS:
                $house = new HouseClass();
                $outPut = $house->info();
                //QUERY INSERT:
                $query2 = "INSERT INTO house (
                        street_name,
                        number_of_house,
                        number_floors,
                        number_porches,
                        occupied_area)
                    VALUES (
                        '{$house->streetName}',
                        '{$house->houseNumber}',
                        '{$house->numberFloors}',
                        '{$house->numberPorches}',
                        '{$house->occupiedArea}'
                    )";
                //CHECKS SUCCESS
                if ($connect->query($query2) === TRUE) {
                    $q = "New record created successfully";
                } else {
                    $q = "Error: " . $query2 . "<br>" . $connect->error;
                }
            }
            //CLOSES CONNECTION
            mysqli_close($connect);
        ?>
        <div class="container">
            <?php
                //GETS PAGE HEADER
                require_once 'php/header.php';
            ?>
            <div class="jumbotron">
                <div>
                    <h4>OOP Task 4: Solution</h4>
                </div>
                <?php
                    //GETS BUTTONS "ADD DATA" AND "SHOW DATA"
                    require_once 'php/oop4php/addData.php';
                ?>
                <div class="fc">
                    <form name="aform1" action="oop4-1house.php" method="post" role="form" onsubmit="">
                        <input type=hidden name="form1">
                        <select name="streetName" class="sel">
                            <?php
                                //MAKES OPTIONS "STREET NAME"
                                for ($i = 0; $i < count($options); $i++) {
                                    echo "<option value=\"$options[$i]\">$options[$i] street</option>";
                                }
                            ?>
                        </select>
                        <span>The name of the street where your house will be locate</span>
                        <div>
                            <input name="houseNumber" type="text"/><span>   Please enter the house number</span>
                        </div>
                        <div>
                            <input name="numberFloors" type="text"/><span>   Please enter the number of floors</span>
                        </div>
                        <div>
                            <input name="numberPorches" type="text"/><span>   Please enter the number of porches</span>
                        </div>
                        <div>
                            <input name="occupiedArea" type="text"/><span>   How many area does it occupy?</span>
                        </div>
                        <input id="confirmHouse" name="confirmHouse" type="submit" value="Confirm"/>
                        <span style="color: red;">After you've filled all the fields!</span>
                    </form>
                </div>
                <?php
                    //SHOW THE ADDED INFROMATION
                    if (isset($confirmHouse)) {
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