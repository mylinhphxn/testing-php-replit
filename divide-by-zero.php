<?php
//divide-by-zero.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';
class TestOfCalculator extends UnitTestCase {
	function testDivide() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->divide(3,0), "ERR", "divide by zero, returns ERR");
	}
}
