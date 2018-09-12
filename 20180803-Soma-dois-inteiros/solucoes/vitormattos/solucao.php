<?php
/**
 * Função de soma
 */
function soma($a, $b)
{
    return $a + $b;
}

$a = $argv[1];
$b = $argv[2];
echo "X = " . soma($a, $b) . "\n";
