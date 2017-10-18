<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/Calc.php";

class CalcTest extends TestCase {

    /**
     * @var Calc
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Calc;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Calc::add
     * @todo   Implement testAdd().
     */
    public function testAdd() {
        // Remove the following lines when you implement this test.
        $this->assertEquals(4, $this->object->add(2, 2));
    }

    /**
     * @covers Calc::render
     * @todo   Implement testRender().
     */
    public function testRender() {
        // Remove the following lines when you implement this test.
        $expected = "Hello World!";
        $this->assertEquals($expected, $this->object->render());
    }

    /**
     * @covers Calc::returnTrue
     * @todo   Implement testReturnTrue().
     */
    public function testReturnTrue() {
        // Remove the following lines when you implement this test.
         $this->assertTrue($this->object->returnTrue());
    }

    /**
     * @covers Calc::returnArray
     * @todo   Implement testReturnArray().
     */
    public function testReturnArray() {
        // Remove the following lines when you implement this test.
       $this->assertContains("Hey", $this->object->returnArray());
    }

}
