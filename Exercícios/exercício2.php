<?php

class ContaBancaria{
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;

    public function depositar($deposito){
        $this->saldo = $this->saldo + $deposito;
        echo "<br><br>Valor depositado: ". $deposito ;
        echo "<br>Saldo atual: " . $this->saldo . "<br>";
    }

    public function sacar($saque){
        if($this->saldo < $saque){
            echo "<br>Saldo insuficiente";
        }
        else{
            $this->saldo = $this->saldo - $saque;
            echo "<br>Valor retirado: ". $saque . "<br>";
        }
    }

    public function consultarSaldo(){
        echo "<br><br>Saldo atual: " . $this->saldo . "<br>";
    }
}

$conta1 = new ContaBancaria();
$conta1->titular = 'Ketlin';
$conta1->numero = 2784;
$conta1->saldo = 98000;
$conta1->tipo = 'Poupança';

echo "<h1>Conta Bancária</h1>";

echo "<p>Titular da conta: " . $conta1->titular . "</p>";
echo "<p>Numero da conta: " . $conta1->numero . "</p>";
echo "<p>Saldo: " . $conta1->saldo . "</p>";
echo "<p>Tipo da conta: " . $conta1->tipo ; "</p>";

$conta1->depositar(100);
$conta1->sacar(100000);
$conta1->consultarSaldo();
