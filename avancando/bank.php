<?php

function sacar (array $conta, float $valorASacar): array {
  if( $valorASacar > $conta['saldo']) {
    exibeMensagem("Você não tem saldo");
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}

function exibeMensagem ($mensagem) {
  echo $mensagem . PHP_EOL;
}

function depositar (array $conta, float $valorADepositar): array { // da para se definir o tipo que se deseja receber nos paramêtros e também o tipo que a função retorna
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Depositos precisam ser positivos");
  }
  return $conta;
}

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

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}