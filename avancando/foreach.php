<?php

$contasCorrentes = [
  1234567910 => [
    'titular' => 'Italo',
    'saldo' => 1200
  ],
  1234557911 => [
    'titular' => 'Paulo',
    'saldo' => 12000
  ],
  1234542310 => [
    'titular' => 'Monique',
    'saldo' => 300
  ]
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $conta['titular'] . PHP_EOL; 
}