<?php

    abstract class vehicleClass {

        protected $data = [];
        protected $info = [];
        protected $roadTax;
        private $i = 1;

        public function __construct($arr) {
            $this->data["characteristic"] = $arr["characteristic"];
            $this->data["weightEmpty"] = $arr["weightEmpty"];
            $this->data["weightFull"] = $arr["weightFull"];
            $this->data["engineVol"] = $arr["engineVol"];
            $this->data["fuelType"] = $arr["fuelType"];
            $this->data["roadTax"] = (($this->data["engineVol"] / 0.1) * $this->categoryPrice) + $this->data["weightEmpty"] * 0.1;
        }

        public function getInfo() {
            $this->info["roadTax"] = "The road tax is " . $this->data["roadTax"] . " $ ";
            $this->info["characteristic"] = "Dimensions: " . $this->data["characteristic"];
            $this->info["weightEmpty"] = "Empty weight: " . $this->data["weightEmpty"];
            $this->info["weightFull"] = "Full weight: " . $this->data["weightFull"];
            $this->info["engineVol"] = "Engine volume: " . $this->data["engineVol"];
            $this->info["fuelType"] = "Fuel type: " . $this->data["fuelType"];
        }

        public final function showInfo() {
            $this->getInfo();
            foreach ($this->info as $v) {
                echo "<br>$this->i. $v";
                $this->i++;
            }

            $this->i = 1;
        }

    }
    