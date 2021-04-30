<?php

// arrays associativos

$conta1 = [
  'titular' => 'Italo',
  'saldo' => 1200
];
$conta2 = [
  'titular' => 'Paulo',
  'saldo' => 12000
];
$conta3 = [
  'titular' => 'Monique',
  'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}