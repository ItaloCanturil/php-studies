<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$italo = new Titular(new CPF('101.184.152-52'), 'Italo Canturil');
$primeiraConta = new Conta($italo);
$primeiraConta->deposita(500);
$primeiraConta->saca(200);

