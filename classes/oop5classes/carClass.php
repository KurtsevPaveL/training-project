<?php

    class carClass extends vehicleClass {

        public function __construct($arr) {
            parent::__construct($arr);
            $this->data["typeTransmission"] = $arr["typeTransmission"];
            $this->data["numPassenger"] = $arr["numPassenger"];
            $this->data["bodyType"] = $arr["bodyType"];
        }

        public function getInfo() {
            parent::getInfo();
            $this->info["typeTransmission"] = "Type of transmission: " . $this->data["typeTransmission"];
            $this->info["numPassenger"] = "Number of passengers: " . $this->data["numPassenger"];
            $this->info["bodyType"] = "Body type: " . $this->data["bodyType"];
        }

    }
