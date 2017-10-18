<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StubTest
 *
 * @author crist
 */
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/SomeClass.php";

class StubTest extends TestCase {

    //put your code here

    public function testStub() {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);

        // Configure the stub.
        $stub->method('doSomething')
                ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }

}
