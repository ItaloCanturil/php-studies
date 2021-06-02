<?php

class Conta
{
  private Titular $titular;
  private float $saldo;
  public static $numeroDeContas = 0;

  public function __construct($titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;

    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }

  public function saca (float $valorASacar): void
  {
    if ($valorASacar > $this->saldo) {
      echo "Saldo indiponível";
      return;
    }

    $this->saldo -= $valorASacar;
  }

  public function deposita (float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      echo "Valor precisa ser positivo";
      return;
    }

    $this->saldo += $valorADepositar;
  }

  public function transfere (float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "Saldo indisponivel";
      return;
    }

    $this->saca($valorATransferir);
    $contaDestino->deposita($valorATransferir);
  }

  public function recuperarSaldo (): float 
  {
    return $this->saldo;
  }

  public function recuperaCpfTitular (): string
  {
    return $this->titular->recuperaCpf();
  }

  public function recuperaNomeTitular (): string
  {
    return $this->titular->recuperaNome();
  }

  public static function recuperaNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }
}