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
                //SETUP ERRORS
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                //SETUP PAGE HEADER
                require_once 'php/header.php';

                //APARTMENT CLASS============================================================================
                /*
                  Создайте класс, описывающий квартиру в жилом доме.
                  В качестве примеров полей используйте количество комнат,
                  площадь, этаж, количество жильцов, наличие балконов и их количество,
                  тип отопления и т.д. Реализуйте методы, которые:
                  - производят расчет коммунальных услуг в зависимости от количества жильцов или площади квартиры (каждая услуга отдельно);
                  - рассчитывает сумму месячного платежа за все коммунальные услуги за месяц;
                  - добавляет и удаляет жильцов
                  - выводит информацию о квартире.
                 */

                class ApartmentClass {

                    //STANDART
                    private $room;
                    private $area;
                    private $floor;
                    public $numOfResidents;
                    private $numOfBalcony;
                    private $heating;
                    //ADDED
                    public $numApart;

                    function __construct($room, $area, $floor, $res, $numBal, $heat, $numApart) {

                        $this->room = $room;
                        $this->area = $area;
                        $this->floor = $floor;
                        $this->numOfResidents = $res;
                        $this->numOfBalcony = $numBal;
                        $this->heating = $heat;
                        $this->numApart = $numApart;
                    }

                    private function res_price_util() {
                        return $this->numOfResidents * 5.23;
                    }

                    private function area_price_util() {
                        return $this->area * 2.77;
                    }

                    public function calculate_payments() {
                        return ($this->area_price_util() + $this->res_price_util());
                    }

                    public function info() {
                        $payment = $this->calculate_payments();
                        $outPut = "<div class=\"oneitem\">"
                            . "Information about the apartment: # $this->numApart<br>"
                            . "Number of rooms: $this->room<br>"
                            . "Area: $this->area<br>"
                            . "Floor located: $this->floor<br>"
                            . "The number of residents: $this->numOfResidents <br>"
                            . "Balconies: $this->numOfBalcony <br>"
                            . "Type of heating: $this->heating <br>"
                            . "Month payment(utilities): $payment$ <br>"
                            . "</div>";
                        echo $outPut; //. "<br>";
                    }

                    public function change_num_resident($arg) {
                        $this->numOfResidents = $arg;
                    }

                    function __destruct() {

                    }

                }

                //CREATING INSTANCE OF APARTMENTCLASS
                $ap1 = new ApartmentClass(5, 200, 8, 4, 1, "common", 10);
                $ap2 = new ApartmentClass(3, 150, 7, 2, 2, "private", 15);
                $ap3 = new ApartmentClass(6, 250, 9, 6, 2, "common", 23);
                $ap4 = new ApartmentClass(2, 100, 2, 4, 1, "common", 56);
                $ap5 = new ApartmentClass(3, 125, 4, 3, 2, "private", 33);
                $ap6 = new ApartmentClass(4, 140, 2, 4, 1, "common", 89);
                $ap7 = new ApartmentClass(3, 100, 6, 5, 2, "common", 66);
                $ap8 = new ApartmentClass(2, 100, 2, 2, 1, "private", 45);

                //HOUSE CLASS============================================================================
                /* Создайте класс, описывающий жилой многоэтажный дом, состоящий из квартир.
                  Используйте класс квартиры из предыдущего задания.
                  В качестве примеров полей используйте номер дома, количество этажей, количество подъездов,
                  квартиры, площади прилегающей территории и т.д.
                  Реализуйте методы, которые:
                  - рассчитывает размер коммунальных платежей со всех квартир в этом доме;
                  - рассчитывает объем потребляемого электричества для освещения подъездов в зависимости от количества подъездов и этажей;
                  - рассчитывает размер налога на землю в зависимости от размера терртории, отведенной для дома;
                  - выводит информацию о доме.
                  Примечание.
                  Квартиры в одном доме удобнее всего хранить в массиве переменных.
                 */

                class HouseClass {

                    //STANDART
                    public $numHouse;
                    private $numFloors;
                    private $numPorches;
                    public $apartments = [];
                    public $area;

                    function __construct($numHouse, $numFloors, $numPorches, $area) {
                        $this->numHouse = $numHouse;
                        $this->numFloors = $numFloors;
                        $this->numPorches = $numPorches;
                        $this->area = $area;
                    }

                    public function count_billUt() {
                        $billUt = 0;
                        for ($i = 0; $i < count($this->apartments); $i++) {
                            $oneAp = $this->apartments[$i];
                            $billUt += $oneAp->calculate_payments();
                        }
                        return $billUt;
                    }

                    public function count_bill_elect() {
                        return ($this->numPorches * $this->numFloors * 10.63);
                    }

                    public function count_tax_area() {
                        return $this->area * 1.334;
                    }

                    public function add_apart($ap) {
                        $this->apartments[] = $ap;
                    }

                    //ADDED
                    public function ap_num() {
                        $apN = "";
                        $ap = $this->apartments;

                        for ($i = 0; $i < count($ap); $i++) {
                            $apN .= "#" . $ap[$i]->numApart . " ";
                        }
                        return $apN;
                    }

                    public function info() {
                        $apUt = $this->count_billUt();
                        $elec = $this->count_bill_elect();
                        $area = $this->count_tax_area();
                        $apNum = $this->ap_num();
                        $outPut = "<div class=\"oneitem\">"
                            . "Information about the house: # $this->numHouse<br>"
                            . "Number of floors: $this->numFloors<br>"
                            . "Number of porches: $this->numPorches<br>"
                            . "Area: $this->area<br>"
                            . "Numbers of apartments: $apNum <br>"
                            . "Month bill(utilities for apartments): $apUt $ <br>"
                            . "Month bill(electricity): $elec $ <br>"
                            . "Tax for area: $area $ <br>"
                            . "</div>";
                        echo $outPut;
                    }

                    function __destruct() {

                    }

                }

                //CREATING INSTANCE OF HOUSE CLASS
                $h1 = new HouseClass(5, 10, 4, 3000);
                $h2 = new HouseClass(7, 12, 2, 2000);
                $h3 = new HouseClass(37, 5, 5, 5000);
                $h4 = new HouseClass(12, 6, 3, 2500);
                //ADDIND APARTMENTS
                $h1->add_apart($ap1);
                $h1->add_apart($ap2);
                $h1->add_apart($ap3);
                $h2->add_apart($ap4);
                $h2->add_apart($ap5);
                $h3->add_apart($ap6);
                $h4->add_apart($ap7);
                $h4->add_apart($ap8);

                //STREET CLASS============================================================================
                /*
                  Задача. Создайте класс, описывающий улицу в населенном пункте.
                  Используйте класс дом из предыдущего задания.
                  В качестве примеров полей используйте название улицы, ее протяженность,
                  координаты начала и конца, дома и т.д.
                  Реализуйте методы, которые:
                  - рассчитывает количество дворников, которое необходимо для уборки прилегающих территорий,
                  всех домов по улице в зависимости от площади этих территорий;
                  - рассчитывает объем коммунальных платежей, которые будут получены со всех домов;
                  - выводит информацию об улице.
                 */
                class StreetClass {

                    //STANDART
                    private $strName;
                    private $length;
                    private $begins;
                    private $ends;
                    public $houses = [];

                    function __construct($strName, $length, $begins, $ends) {
                        $this->strName = $strName;
                        $this->length = $length;
                        $this->begins = $begins;
                        $this->ends = $ends;
                    }

                    public function count_jank() {
                        $jank = 0;
                        for ($i = 0; $i < count($this->houses); $i++) {
                            $oneHs = $this->houses[$i];
                            $jank += $oneHs->area / 50;
                        }
                        return $jank;
                    }

                    public function count_bill_util() {
                        $bill = 0;
                        for ($i = 0; $i < count($this->houses); $i++) {
                            $oneHs = $this->houses[$i];
                            $bill += $oneHs->count_billUt();
                        }
                        return $bill;
                    }

                    public function add_house($hs) {
                        $this->houses[] = $hs;
                    }

                    public function hs_util() {
                        $hsUtil = 0;
                        $hs = $this->houses;
                        for ($i = 0; $i < count($hs); $i++) {
                            $hsUtil += $hs[$i]->numHouse;
                        }
                        return $hsUtil;
                    }

                    //ADDED
                    public function hs_num() {
                        $hsN = "";
                        $hs = $this->houses;
                        for ($i = 0; $i < count($hs); $i++) {
                            $hsN .= "#" . $hs[$i]->numHouse . " ";
                        }
                        return $hsN;
                    }

                    public function info() {
                        $hsNum = $this->hs_num();
                        $jank = $this->count_jank();
                        $strUt = $this->count_bill_util();
                        $outPut = "<div class=\"oneitem\">"
                            . "Information about the street: $this->strName<br>"
                            . "Length: $this->length<br>"
                            . "Begins: $this->begins<br>"
                            . "Ends: $this->ends<br>"
                            . "Numbers of houses: $hsNum <br>"
                            . "Number of janitors: $jank men <br>"
                            . "Month bill(utilities): $strUt $ <br>"
                            . "</div>";
                        echo $outPut;
                    }

                }

                $st1 = new StreetClass("Sumskaya", 10, 123.01, 789.91);
                $st2 = new StreetClass("Poltavskiy Shlyah", 10, 123.01, 789.91);
                $st1->add_house($h1);
                $st1->add_house($h2);
                $st1->add_house($h3);
                $st2->add_house($h4);

                //TOWN CLASS
                /*
                  Создайте класс, описывающий населенный пункт.
                  В качестве примеров полей используйте название населенного пункта,
                  год основания, географические координаты и т.д.
                  Реализуйте методы, которые:
                  - рассчитывает бюджет населенного пункта в зависимости от размера налога на землю,
                  полученного со всех домов;
                  - рассчитывает количество населения, проживающего в населенном пункте;
                  - выводит информацию о населенном пункте.
                 */

                class TownClass {

                    public $name;
                    private $fonded;
                    private $coordin;
                    private $streets = [];

                    function __construct($name, $fonded, $coordin) {
                        $this->name = $name;
                        $this->fonded = $fonded;
                        $this->coordin = $coordin;
                    }

                    public function tax_area() {
                        $arrStr = $this->streets;
                        $areaTax = 0;
                        for ($i = 0; $i < count($arrStr); $i++) {
                            $arrHs = $arrStr[$i]->houses;
                            for ($j = 0; $j < count($arrHs); $j++) {
                                $oneHs = $arrHs[$j];
                                $areaTax += $oneHs->count_tax_area();
                            }
                        }
                        return $areaTax;
                    }

                    public function count_all_residents() {
                        $arrStr = $this->streets;
                        $residents = 0;
                        for ($i = 0; $i < count($arrStr); $i++) {
                            $oneStr = $arrStr[$i];
                            $arrHs = $oneStr->houses;
                            for ($j = 0; $j < count($arrHs); $j++) {
                                $oneHs = $arrHs[$j];
                                $arrAp = $oneHs->apartments;
                                for ($k = 0; $k < count($arrAp); $k++) {
                                    $oneAp = $arrAp[$k];
                                    $residents +=$oneAp->numOfResidents;
                                }
                            }
                        }
                        return $residents;
                    }

                    public function add_str($str) {
                        $this->streets[] = $str;
                    }

                    public function info() {
                        $taxArea = $this->tax_area();
                        $res = $this->count_all_residents();
                        $outPut = "<div class=\"oneitem\">"
                            . "Information about the town: $this->name<br>"
                            . "Fonded in: $this->fonded<br>"
                            . "Coordinates: $this->coordin<br>"
                            . "Month tax(area tax): $taxArea $ <br>"
                            . "Numbers of residents: $res men<br>"
                            . "</div>";
                        echo $outPut;
                    }

                }

                $town = new TownClass("Kharkov", 1654, "50° 0' 36° 15'");
                $town->add_str($st1);
                $town->add_str($st2);
            ?>
            <div class="jumbotron">
                <div>
                    <h4>OOP Task 4 : Solution</h4>
                </div>
                <div>
                    <div class="block">
                        <h4 class="bluetx">We created 8 instances of the "apartment class". They are:</h4>
                        <div>
                            <?php
                                $ap1->info();
                                $ap2->info();
                                $ap3->info();
                                $ap4->info();
                                $ap5->info();
                                $ap6->info();
                                $ap7->info();
                                $ap8->info();
                            ?>
                        </div>
                    </div>
                    <div>
                        <div class="block">
                            <h4 class="bluetx">We created 4 instances of the "house class". They are:</h4>
                            <div>
                                <?php
                                    $h1->info();
                                    $h2->info();
                                    $h3->info();
                                    $h4->info();
                                ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block">
                            <h4 class="bluetx">We created 2 instances of the "street class". They are:</h4>
                            <div>
                                <?php
                                    $st1->info();
                                    $st2->info();
                                ?>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="block">
                            <h4 class="bluetx">We created 1 instance of the "town class". It is:</h4>
                            <div>
                                <?php
                                    $town->info();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>