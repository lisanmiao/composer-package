<?php
// src/Calculator.php

namespace Lisanmiao\ComposerPackage;

class Calculator
{
    /**
     * Returns the sum of $a and $b.
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Returns the difference of $a and $b.
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Returns the product of $a and $b.
     *
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Returns the quotient of $a divided by $b.
     *
     * @param int|float $a
     * @param int|float $b
     * @return float|int
     *
     * @throws \InvalidArgumentException
     */
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Division by zero is not allowed.');
        }

        return $a / $b;
    }

    /**
     * Returns the remainder of $a divided by $b.
     *
     * @param int $a
     * @param int $b
     * @return int
     *
     * @throws \InvalidArgumentException
     */
    public function modulo($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Modulo by zero is not allowed.');
        }

        return $a % $b;
    }

    /**
     * Returns $a raised to the power of $b.
     *
     * @param int|float $a
     * @param int|float $b
     * @return float|int
     */
    public function power($a, $b)
    {
        return $a ** $b;
    }
}