<?php

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

        private $townName = "";
        //SELF PROPERTIES
        protected $streetName = "";
        protected $streetLength = 0;
        protected $streetBegin = 123.123;
        protected $streetEnd = 234.234;
        protected $houses = [];
        protected $numberJanitors = 0;
        protected $payment = 0;
        protected $occupiedArea = 0;

        function __construct() {
            $this->streetName = filter_input(INPUT_POST, "streetName");
            $this->streetLength = filter_input(INPUT_POST, "streetLength");
            $this->streetBegin = filter_input(INPUT_POST, "streetBegin");
            $this->streetEnd = filter_input(INPUT_POST, "streetEnd");
        }

        protected function count_janitors() {
            for ($i = 0; $i < count($this->houses); $i++) {
                $oneHouse = $this->houses[$i];
                $this->number_janitors+= $oneHouse->occupiedArea / 1000;
            }
            $this->number_janitors = round($this->number_janitors);
        }

        protected function count_all_payments() {
            for ($i = 0; $i < count($this->houses); $i++) {
                $oneHouse = $this->houses[$i];
                $this->payment+= $oneHouse->monthBills;
            }
        }

        public function count_occupied_area() {
            for ($i = 0; $i < count($this->houses); $i++) {
                $oneHouse = $this->houses[$i];
                $this->occupiedArea+= $oneHouse->occupiedArea;
            }
        }

        public function info() {
            $this->count_janitors();
            $this->count_all_payments();
            $this->count_occupied_area();
            $numberHouses = count($this->houses);
            $outPut = "Information about the street <br>"
                . "____________________________________<br>"
                . "Street name: $this->streetName<br>"
                . "Street length: $this->streetLength<br>"
                . "Street begins: $this->streetBegin<br>"
                . "Street ends: $this->streetEnd<br>"
                . "____________________________________<br>"
                . "The number of inhabited houses: $numberHouses <br>"
                . "Occupied area (area of all houses): $this->occupiedArea<br>"
                . "Month payment (utilities): $this->payment $<br>"
                . "";
            return $outPut;
        }

        public function add_house($hou) {
            $house = $hou;
            if ($house !== NULL) {
                $this->houses[] = $house;
                echo "Apartment has added to the house!";
            } else {
                echo "You can't call this method without an argument!";
            }
        }

        function __destruct() {

        }

    }
    