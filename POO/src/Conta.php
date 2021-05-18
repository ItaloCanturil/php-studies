<?php

class Conta
{
  private string $cpfTitular;
  private string $nomeTitular;
  private float $saldo = 0;

  public function __construct(string $cpfTitular, string $nomeTitular)
  {
    $this->cpfTitular = $cpfTitular;
    $this->nomeTitular = $nomeTitular;
    $this->saldo = 0;
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
    return $this->cpfTitular;
  }

  public function recuperaNomeTitular (): string
  {
    return $this->nomeTitular;
  }
}