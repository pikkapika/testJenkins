<?php

require_once(dirname(__FILE__) . '/../src/Calculator.php');


/**
 * Test class for Calculator.
 * Generated by PHPUnit on 2011-06-12 at 21:36:32.
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert (0, 0) == 0.
     */
    public function testAdd()
    {
        $this->assertEquals(
          0,
          $this->object->add(0, 0)
        );
    }

    /**
     * Generated from @assert (0, 1) == 1.
     */
    public function testAdd2()
    {
        $this->assertEquals(
          1,
          $this->object->add(0, 1)
        );
    }

    /**
     * Generated from @assert (1, 0) == 1.
     */
    public function testAdd3()
    {
        $this->assertEquals(
          1,
          $this->object->add(1, 0)
        );
    }

    /**
     * Generated from @assert (1, 1) == 2.
     */
    public function testAdd4()
    {
        $this->assertEquals(
          2,
          $this->object->add(1, 1)
        );
    }
}
?>
