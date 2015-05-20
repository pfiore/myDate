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

    // Test for these dates:
    // Jan 1, 2001
    $test_date_1 = new myDateClass(01, 01, 2001);

    // Feb 2, 2002
    $test_date_2 = new myDateClass(02, 02, 2002);

    // Mar 3, 2003
    $test_date_3 = new myDateClass(03, 03, 2003);

    // Apr 4, 2004
    $test_date_4 = new myDateClass(04, 04, 2004);

    // Dec 5, 2015
    $test_date_5 = new myDateClass(12, 05, 2015);

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        <title>Question #2:  myDateClass</title>
    </head>
    <body class="container">
        <h2> Test Date #1:</h2>
        <h3>Jan 1, 2001: </h3>
        <?php
            print "<b><p>yyyy-mm-dd:</b><br> " . $test_date_1->prettyDate(0) . "</p>";
            print "<b><p>mm/dd/yyyy:</b><br> " . $test_date_1->prettyDate(1) . "</p>";
            print "<b><p>Month day, yyyy:</b><br> " . $test_date_1->prettyDate(2) . "</p>";
            print "<b><p>The Xst day of the month of Month, in the year yyyy:</b><br> " . $test_date_1->prettyDate(3) . "</p>";
            print "<b><p>error message when any other variable is passed to the method:</b><br> " . $test_date_1->prettyDate(4) . "</p><br><br>";
        ?>

        <h2> Test Date #2:</h2>
        <h3>Feb 2, 2002: </h3>
        <?php
            print "<b><p>yyyy-mm-dd:</b><br> " . $test_date_2->prettyDate(0) . "</p>";
            print "<b><p>mm/dd/yyyy:</b><br> " . $test_date_2->prettyDate(1) . "</p>";
            print "<b><p>Month day, yyyy:</b><br> " . $test_date_2->prettyDate(2) . "</p>";
            print "<b><p>The Xst day of the month of Month, in the year yyyy:</b><br> " . $test_date_2->prettyDate(3) . "</p>";
            print "<b><p>error message when any other variable is passed to the method:</b><br> " . $test_date_2->prettyDate(4) . "</p><br><br>";
        ?>

        <h2> Test Date #3:</h2>
        <h3>Mar 3, 2003: </h3>
        <?php
            print "<b><p>yyyy-mm-dd:</b><br> " . $test_date_3->prettyDate(0) . "</p>";
            print "<b><p>mm/dd/yyyy:</b><br> " . $test_date_3->prettyDate(1) . "</p>";
            print "<b><p>Month day, yyyy:</b><br> " . $test_date_3->prettyDate(2) . "</p>";
            print "<b><p>The Xst day of the month of Month, in the year yyyy:</b><br> " . $test_date_3->prettyDate(3) . "</p>";
            print "<b><p>error message when any other variable is passed to the method:</b><br> " . $test_date_3->prettyDate(4) . "</p><br><br>";
        ?>

        <h2> Test Date #4:</h2>
        <h3>Apr 4, 2004: </h3>
        <?php
            print "<b><p>yyyy-mm-dd:</b><br> " . $test_date_4->prettyDate(0) . "</p>";
            print "<b><p>mm/dd/yyyy:</b><br> " . $test_date_4->prettyDate(1) . "</p>";
            print "<b><p>Month day, yyyy:</b><br> " . $test_date_4->prettyDate(2) . "</p>";
            print "<b><p>The Xst day of the month of Month, in the year yyyy:</b><br> " . $test_date_4->prettyDate(3) . "</p>";
            print "<b><p>error message when any other variable is passed to the method:</b><br> " . $test_date_4->prettyDate(4) . "</p><br><br>";
        ?>

        <h2> Test Date #5:</h2>
        <h3>Dec 5, 2015: </h3>
        <?php
            print "<b><p>yyyy-mm-dd:</b><br> " . $test_date_5->prettyDate(0) . "</p>";
            print "<b><p>mm/dd/yyyy:</b><br> " . $test_date_5->prettyDate(1) . "</p>";
            print "<b><p>Month day, yyyy:</b><br> " . $test_date_5->prettyDate(2) . "</p>";
            print "<b><p>The Xst day of the month of Month, in the year yyyy:</b><br> " . $test_date_5->prettyDate(3) . "</p>";
            print "<b><p>error message when any other variable is passed to the method:</b><br> " . $test_date_5->prettyDate(4) . "</p><br><br>";
        ?>

        <h2> Today's Date:</h2>
        <?php
            print "<p>". myDateClass::today() . "</p>"
        ?>






    </body>
</html>
