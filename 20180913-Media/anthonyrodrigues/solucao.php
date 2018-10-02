<?php
    /**
     * Created by PhpStorm.
     * User: Anthony Rodrigues
     * Date: 02/10/18
     * Time: 10:07
     */

    /**
     * @param float $firstValue
     * @param float $secondValue
     * @param float $firstPonderosity
     * @param float $secondPonderosity
     * @return float
     */
    function media(float $firstValue, float $secondValue,  float $firstPonderosity, float $secondPonderosity) : float
    {
        return round(
            (
                (
                    ($firstValue * $firstPonderosity) +
                    ($secondValue * $secondPonderosity)
                ) /
                ($firstPonderosity + $secondPonderosity)
            ),
            5
        );
    }

    $firstValue = $argv[1];
    $secondValue = $argv[2];
    if ((is_null($firstValue) || $firstValue > 10.0) || (is_null($secondValue) || $secondValue > 10.0)) {
        echo "Numeros não permitidos. Tente novamente \n";
        return;
    }

    echo "Media = " . media($firstValue, $secondValue, 3.5, 7.5) . "\n";