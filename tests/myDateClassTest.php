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

            //Assert
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

            //Assert
            $this->assertEquals(07, $result);
        }


    }
?>
