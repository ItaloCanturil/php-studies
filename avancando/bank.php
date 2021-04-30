<?php

require 'funcoes.php';

$contasCorrentes = [
  '123.456.791-10' => [
    'titular' => 'Italo',
    'saldo' => 1200
  ],
  '123.951.456-38' => [
    'titular' => 'Paulo',
    'saldo' => 12000
  ],
  '132.474.748-51' => [
    'titular' => 'Monique',
    'saldo' => 300
  ]
];

$contasCorrentes['123.456.791-10'] = depositar(
  $contasCorrentes['123.456.791-10'],
  900
);

unset($contasCorrentes['123.951.456-38']);

titularComLetrasMaiuscula($contasCorrentes['132.474.748-51']);

foreach ($contasCorrentes as $cpf => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibeMensagem("$cpf $titular $saldo");
}