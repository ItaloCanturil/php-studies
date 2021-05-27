<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('101.184.152-52', 'Italo Canturil');
$primeiraConta->deposita(500);
$primeiraConta->saca(200);

