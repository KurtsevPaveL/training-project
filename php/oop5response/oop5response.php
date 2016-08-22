<?php

    $ajax1 = filter_input(INPUT_POST, "ajax1");
    $ajax2 = filter_input(INPUT_POST, "ajax2");

    if (isset($ajax1)) {

        $w = +(filter_input(INPUT_POST, "weight"));
        switch ($w) {
            case($w < 2700): $vCategory = "car";
                break;
            case($w < 22000): $vCategory = "truck";
                break;
            default: $wCategory = "Out of category";
        }

        $divStart = "<div id='$vCategory'>";

        $vehicle = ""
            . "<input type='text' id='characteristic'  value='4500x1800x1600'> Enter vehicle dimensions<br>"
            . "<input type='text' id='weightEmpty'  value='$w'> Enter vehicle empty weight<br>"
            . "<input type='text' id='weightFull' value='$w'> Enter vehicle full weight<br>"
            . "<input type='text' id='engineVol' value='2'> Enter engine volume<br>"
            . "<input type='text' id='fuelType' value='petrol'> Enter fuel type<br>"
            . "";

        $car = ""
            . "<input type='text' id='typeTransmission'  value='manual'> Enter type of transmission<br>"
            . "<input type='text' id='numPassenger' value='1'> Enter number of passengers<br>"
            . "<input type='text' id='bodyType' value='sedan'> Enter body type<br>"
            . "";

        $truck = ""
            . "<input type='text' id='allowedWeightTrailer' value='0'> Enter allowed weight of trailer<br>"
            . "<input type='text' id='numAxle' value='0'> Enter number of axles<br>"
            . "";
        $divEnd = "</div>";

        $but = "<input type='button' id='countTax' value='Count road tax'>";

        switch ($vCategory) {
            case ('car'): $outPut = $divStart . $vehicle . $car . $but . $divEnd;
                break;
            case ('truck'): $outPut = $divStart . $vehicle . $truck . $but . $divEnd;
                break;
            default: $outPut = "Weight is out of catagory";
        }
        echo $outPut;
    }

    if (isset($ajax2)) {
        $wE = +(filter_input(INPUT_POST, "weightEmpty"));
        $arr = $_POST;
        require_once "../../classes/oop5classes/vehicleClass.php";
        switch ($wE) {
            case($wE < 2700):
                require_once "../../classes/oop5classes/carClass.php";
                switch ($wE) {
                    case($wE < 1300):
                        require_once "../../classes/oop5classes/compactClass.php";
                        $vehicle = new compactClass($arr);
                        break;
                    case($wE < 1700):
                        require_once "../../classes/oop5classes/businessClass.php";
                        $vehicle = new businessClass($arr);
                        break;
                    default:
                        require_once "../../classes/oop5classes/suvClass.php";
                        $vehicle = new suvClass($arr);
                        break;
                }
                break;
            case($wE < 22000):
                require_once "../../classes/oop5classes/truckClass.php";
                switch ($wE) {
                    case($wE < 5000):
                        require_once "../../classes/oop5classes/lightClass.php";
                        $vehicle = new lightClass($arr);
                        break;
                    default:
                        require_once "../../classes/oop5classes/heavyClass.php";
                        $vehicle = new heavyClass($arr);
                        break;
                }
                break;
            default: $outPut = "Weight is out of catagory";
        }
        $vehicle->showInfo();
    }