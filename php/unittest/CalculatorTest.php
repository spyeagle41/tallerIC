<?php

require_once __DIR__ . '/../src/vendor/autoload.php';
require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

    public function testPlus() {



        $calculator = new Calculator();


        $result = $calculator->plus(1, 1);


        $this->assertEquals(2, $result);
    }

}
