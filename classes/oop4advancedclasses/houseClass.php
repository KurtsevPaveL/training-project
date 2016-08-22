<?php

    /*
      Cоздайте класс, описывающий жилой многоэтажный дом, состоящий из квартир. Используйте класс квартиры из предыдущего задания. В качестве примеров полей используйте номер дома, количество этажей, количество подъездов, квартиры, площади прилегающей территории и т.д. Реализуйте методы, которые:
      - рассчитывает размер коммунальных платежей со всех квартир в этом доме;
      - рассчитывает объем потребляемого электричества для освещения подъездов в зависимости от количества подъездов и этажей;
      - рассчитывает размер налога на землю в зависимости от размера терртории, отведенной для дома;
      - выводит информацию о доме.
      Примечание.
      Квартиры в одном доме удобнее всего хранить в массиве переменных.
     */

    class HouseClass {

        public $streetName = "";
        public $houseNumber = 0;
        public $numberFloors = 0;
        public $numberPorches = 0;
        public $occupiedArea = 0;
        protected $taxArea = 0;

        //public $apartments = [];
        //public $numOfResidents = 0;
        //public $payment = 0;
        //public $bill_electricity = 0;

        function __construct() {
            $this->streetName = filter_input(INPUT_POST, "streetName");
            $this->houseNumber+= filter_input(INPUT_POST, "houseNumber");
            $this->numberFloors+= filter_input(INPUT_POST, "numberFloors");
            $this->numberPorches+= filter_input(INPUT_POST, "numberPorches");
            $this->occupiedArea+= filter_input(INPUT_POST, "occupiedArea");
        }

        public function calculatePayments() {
            for ($i = 0; $i < count($this->apartments); $i++) {
                $oneApartment = $this->apartments[$i];
                $this->payment+= $oneApartment->monthBills;
            }
        }

        public function get_bill_electricity() {
            $this->bill_electricity = $this->numberPorches * $this->numberFloors * 10;
        }

        public function get_tax_area() {
            return $this->taxArea * 5;
        }

        public function info() {
            $this->get_tax_area();
            $this->get_bill_electricity();
            $outPut = "Information about the house<br>"
                . "Street name: $this->streetName<br>"
                . "House number: $this->houseNumber<br>"
                . "Number of floors: $this->numberFloors<br>"
                . "Number of porches: $this->numberPorches<br>"
                . "Occupied land: $this->occupiedArea<br>"
                . "Bill for electricity: $this->bill_electricity $<br>";
            //. "The number of inhabited apartments: $numberApartments <br>"
            //. "The number of residents:"
            //. "Month payment (utilities): $this->payment $<br>";
            return $outPut;
        }

        function __destruct() {

        }

    }
    