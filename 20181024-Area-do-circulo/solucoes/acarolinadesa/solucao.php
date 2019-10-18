<?php
$pi = 3.14;
$raio =  $argv[1];
$areaTotal = ($raio * $raio)* $pi;
echo "A = " .number_format($areaTotal,4) . "\n";