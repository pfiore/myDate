<?php
    class myDateClass {

        public $MM;
        public $DD;
        public $YYYY;

        function __construct($MM, $DD, $YYYY) {

            $this->MM = $MM;
            $this->DD = $DD;
            $this->YYYY = $YYYY;
        }

        function getMonth() {
            return $this->MM;
        }

        function setMonth($new_month) {
            $this->MM = (int) $new_month;
        }

        function getDay() {
            return $this->DD;
        }

        function setDay($new_day) {
            $this->DD = (int) $new_day;
        }

        function getYear() {
            return $this->YYYY;
        }

        function setYear($new_year) {
            $this->YYYY = (int) $new_year;
        }
    }










?>
