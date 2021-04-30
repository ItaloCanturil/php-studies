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

function titularComLetrasMaiuscula (array &$conta) { // & informa que estamos pegando a referência do array e não o valor
  return $conta['titular'] = mb_strtoupper($conta['titular']);
}