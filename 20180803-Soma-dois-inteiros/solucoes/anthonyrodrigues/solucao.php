<?php
    /**
     * Created by PhpStorm.
     * User: Anthony Rodrigues
     * Date: 01/10/18
     * Time: 17:30
     */

    /**
     * @param int $firstValue
     * @param int $secondValue
     * @return int
     */
    function sum(int $firstValue, int $secondValue) : int
    {
        return $firstValue + $secondValue;
    }

    $firstValue = $argv[1];
    $secondValue = $argv[2];
    if (!is_null($firstValue) && !is_null($secondValue)) {
        echo "X = " . sum($firstValue, $secondValue) . "\n";
    }
