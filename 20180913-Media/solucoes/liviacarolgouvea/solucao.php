<?php 
/*
Leia 2 valores de ponto flutuante de dupla precisão A e B, que correspondem a 2 notas de um aluno. A seguir, calcule a média do aluno, sabendo que a nota A tem peso 3.5 e a nota B tem peso 7.5 (A soma dos pesos portanto é 11). Assuma que cada nota pode ir de 0 até 10.0, sempre com uma casa decimal.
*/
$A = $argv[1];
$B = $argv[2];

$MEDIA = ($A*3.5) + ($B*7.5);

$MEDIA2 = $MEDIA / 11;

echo "MÉDIA = " .number_format($MEDIA2,5);