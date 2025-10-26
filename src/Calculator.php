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
}