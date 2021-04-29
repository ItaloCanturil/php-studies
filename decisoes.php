<?php

$idade = 15;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos" . PHP_EOL;
  echo 'Pode entrar sozinho';
} else if ($idade >= 16 && $numeroDePessoas > 1){
  echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
} else echo "Você só tem $idade anos. Você não pode entrar";