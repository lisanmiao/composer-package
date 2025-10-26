<?php
// tests/CalculatorTest.php

namespace Lisanmiao\ComposerPackage\Tests;

use PHPUnit\Framework\TestCase;
use Lisanmiao\ComposerPackage\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * Test that the add method returns the correct result.
     *
     * @covers \Lisanmiao\ComposerPackage\Calculator::add
     * @test
     */
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::subtract
     * @test
     */
    public function testSubtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->subtract(5, 3));
    }
}