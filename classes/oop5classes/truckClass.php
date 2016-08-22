<?php

    abstract class truckClass extends vehicleClass {

        protected $allowedWeightTrailer;
        protected $numAxle;

        public function __construct($arr) {
            parent::__construct($arr);
            $this->data["allowedWeightTrailer"] = $arr["allowedWeightTrailer"];
            $this->data["numAxle"] = $arr["numAxle"];
        }

        public function getInfo() {
            parent::getInfo();
            $this->info["allowedWeightTrailer"] = "Maximum allowed weight of trailer: " . $this->data["allowedWeightTrailer"];
            $this->info["numAxle"] = "Number of axles: " . $this->data["numAxle"];
        }

    }
    