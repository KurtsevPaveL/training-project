<?php

    /*
      Создайте класс, описывающий квартиру в жилом доме. В качестве примеров полей используйте количество комнат, площадь, этаж, количество жильцов, наличие балконов и их количество, тип отопления и т.д. Реализуйте методы, которые:
      - производят расчет коммунальных услуг в зависимости от количества жильцов или площади квартиры (каждая услуга отдельно);
      - рассчитывает сумму месячного платежа за все коммунальные услуги за месяц;
      - добавляет и удаляет жильцов
      - выводит информацию о квартире.
     */

    class ApartmentClass {

        public $houseNumber = NULL;
        public $theNumberOfApartment = 0;
        public $room = 1;
        public $area = 20;
        public $floor = 0;
        public $numOfResidents = 1;
        public $numOfBalcony = 0;
        public $heating = "common";
        public $monthBills = 5;

        function __construct() {
            $this->houseNumber = filter_input(INPUT_POST, "houseNumber");
            $this->theNumberOfApartment += filter_input(INPUT_POST, "apartmentNumber");
            $this->room += filter_input(INPUT_POST, "rooms");
            $this->area += filter_input(INPUT_POST, "area");
            $this->floor += filter_input(INPUT_POST, "floor");
            $this->numOfResidents += filter_input(INPUT_POST, "numOfResidents");
            if ($this->numOfResidents < 1) {
                $this->numOfResidents = 1;
            }
            $this->numOfBalcony += filter_input(INPUT_POST, "numOfBalcony");
            $this->heating = filter_input(INPUT_POST, "heating");
        }

        private function pay_all_residents() {
            return $this->numOfResidents * 5;
        }

        private function pay_for_area() {
            return $this->area * 2;
        }

        private function calculate_payments() {
            $this->monthBills += $this->pay_for_area() + $this->pay_all_residents();
            $this->monthBills += ((2 + 3 + 8) * $this->numOfResidents);
        }

        public function info() {
            $this->pay_for_area();
            $this->pay_all_residents();
            $this->calculate_payments();
            $outPut = ""
                . "Information about the apartment: <br>"
                . "House number: $this->houseNumber<br>"
                . "Apartment number: $this->theNumberOfApartment<br>"
                . "Number of rooms: $this->room<br>"
                . "Area of the apartment: $this->area<br>"
                . "Floor located: $this->floor<br>"
                . "The number of residents: $this->numOfResidents <br>"
                . "Balconies: $this->numOfBalcony <br>"
                . "Type of heating: $this->heating <br>"
                . "Month payment(utilities): $this->monthBills $<br>";
            return $outPut;
        }

        private function change_num_resident($arg) {
            $this->numOfResidents = $arg;
        }

        function __destruct() {

        }

    }
