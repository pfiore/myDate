<?php
    require_once __DIR__.'/../src/myDateClass.php';

    class myDateClassTest extends PHPUnit_Framework_TestCase
    {
        function test_getMonth()
        {
            //ARRANGE
            $MM = 08;
            $DD = 02;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->getMonth();

            //ASSERT
            $this->assertEquals(08, $result);
        }

        function test_setMonth()
        {
            //ARRANGE
            $MM = 08;
            $DD = 02;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $test_date->setMonth(07);
            $result = $test_date->getMonth();

            //ASSERT
            $this->assertEquals(07, $result);
        }

        function test_getDay()
        {
            //ARRANGE
            $MM = 08;
            $DD = 02;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->getDay();

            //ASSERT
            $this->assertEquals(02, $result);
        }

        function test_setDay()
        {
            //ARRANGE
            $MM = 08;
            $DD = 02;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $test_date->setDay(03);
            $result = $test_date->getDay();

            //ASSERT
            $this->assertEquals(03, $result);
        }

        function test_getYear()
        {
            //ARRANGE
            $MM = 08;
            $DD = 02;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->getYear();

            //ASSERT
            $this->assertEquals(1986, $result);
        }

        function test_setYear()
        {
            //ARRANGE
            $MM = 08;
            $DD = 02;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $test_date->setYear(1988);
            $result = $test_date->getYear();

            //ASSERT
            $this->assertEquals(1988, $result);
        }

        function test_prettyDate_0()
        {
            //ARRANGE
            $MM = 8;
            $DD = 2;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->prettyDate(0);

            //ASSERT
            $this->assertEquals("1986-08-02", $result);
        }

        function test_prettyDate_1()
        {
            //ARRANGE
            $MM = 8;
            $DD = 2;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->prettyDate(1);

            //ASSERT
            $this->assertEquals('08/02/1986', $result);
        }

        function test_prettyDate_2()
        {
            //ARRANGE
            $MM = 8;
            $DD = 2;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->prettyDate(2);

            //ASSERT
            $this->assertEquals('August 2nd, 1986', $result);
        }

        function test_prettyDate_3()
        {
            //ARRANGE
            $MM = 8;
            $DD = 2;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->prettyDate(3);

            //ASSERT
            $this->assertEquals('The 2nd day of the month August, in the year 1986', $result);
        }

        function test_prettyDate_4()
        {
            //ARRANGE
            $MM = 8;
            $DD = 2;
            $YYYY = 1986;
            $test_date = new myDateClass($MM, $DD, $YYYY);

            //ACT
            $result = $test_date->prettyDate(4);

            //ASSERT
            $this->assertEquals('ERROR, invalid variable.', $result);
        }

        function test_today()
        {
            //ARRANGE

            //ACT
            $result = myDateClass::today();

            //ASSERT
            $this->assertEquals(date("Y-m-d"),$result);
        }
    }
?>
