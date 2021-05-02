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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas Correntes</h1>

  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) {?>
    <dt>
      <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>
      Saldo: <?= $conta['saldo']; ?>
    </dd>
    <?php } ?>
  </dl>
</body>
</html>