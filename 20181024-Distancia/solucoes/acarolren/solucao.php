<?php
$entrada = $argv[1];
$def = 30;
$tempo = $entrada / $def;
$tempo = $tempo * 60; //retorna os minutos
echo (int) $tempo;