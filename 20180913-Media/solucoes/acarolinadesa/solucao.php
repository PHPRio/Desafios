<?php

$a = $argv[1];
$b = $argv[2];
$media = ($a*3.5+ $b*7.5)/11;
echo "MEDIA = " .number_format($media,5) . "\n";
