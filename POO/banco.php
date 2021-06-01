<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('101.184.152-52', 'Italo Canturil'));
$primeiraConta->deposita(500);
$primeiraConta->saca(200);

