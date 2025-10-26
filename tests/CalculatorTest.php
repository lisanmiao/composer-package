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

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::multiply
     * @test
     */
    public function testMultiply()
    {
        $calculator = new Calculator();
        $this->assertEquals(15, $calculator->multiply(5, 3));
    }

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::divide
     * @test
     */
    public function testDivide()
    {
        $calculator = new Calculator();
        $this->assertEquals(2.5, $calculator->divide(5, 2));
    }

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::divide
     * @test
     */
    public function testDivideByZeroThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $calculator = new Calculator();
        $calculator->divide(5, 0);
    }

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::modulo
     * @test
     */
    public function testModulo()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->modulo(5, 2));
    }

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::modulo
     * @test
     */
    public function testModuloByZeroThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $calculator = new Calculator();
        $calculator->modulo(5, 0);
    }

    /**
     * @covers \Lisanmiao\ComposerPackage\Calculator::power
     * @test
     */
    public function testPower()
    {
        $calculator = new Calculator();
        $this->assertEquals(125, $calculator->power(5, 3));
    }
}