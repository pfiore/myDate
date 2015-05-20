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

        function prettyDate($num) {

            $MM = $this->getMonth();
            $DD = $this->getDay();
            $YYYY = $this->getYear();
            $dateString = $YYYY . '-' . $MM . '-' . $DD;

            date_default_timezone_set('America/Los_Angeles');

            if ($num == 0) {
                return  $new_date = date('Y-m-d', strtotime($dateString));

            }

            elseif ($num == 1) {
                return  $new_date = date('m/d/Y', strtotime($dateString));

            }

            elseif ($num == 2) {
                return  $new_date = date('F jS, Y', strtotime($dateString));//Wasn't sure if you wanted "day" to be represented by 2, 2nd, or second.

            }

            elseif ($num == 3) {
                return  $new_date = date('\T\h\e jS \d\a\y \o\f \t\h\e \m\o\n\t\h F, \i\n \t\h\e \y\e\a\r Y', strtotime($dateString));

            }

            else {
                return "ERROR, invalid variable.";
            }

        }




        static function today() {
            return (date("Y-m-d"));
        }




    }

?>
