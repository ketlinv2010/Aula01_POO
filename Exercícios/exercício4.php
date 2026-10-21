<?php

class Pedido{
    public int $pedido;
    public string $cliente;
    public float $valor;
    public string $status;

    public function adicionarItem($valor){
        $this->valor += $valor;
    }

    public function cancelar(){
        if($this->status!= 'Cancelado'){
            $this->status = 'Cancelado';
        }
        echo "<p>Status: " . $this->status. "</p>";
    }

    public function finalizar(){
        if($this->status == 'Aguardando'){
            $this->status = 'Finalizado';
        }
        echo "<p>Status: " . $this->status. "</p>";
    }

    public function mostrarDados(){
        echo "<p>Cliente: " . $this->cliente . "</p>";
        echo "<p>Pedido: " . $this->pedido . "</p>";
        echo "<p>Valor: R$" . $this->valor . "</p>"; 
        echo "<p>Status: " . $this->status . "</p>";
    }
}

echo "<h2>Pedido 56</h2>";

$pedido1 = new Pedido();
$pedido1->pedido = 56;
$pedido1->cliente = 'Ketlin';
$pedido1->valor = 262.99;
$pedido1->status = 'Aguardando';

$pedido1->mostrarDados();
$pedido1->adicionarItem(25);
$pedido1->finalizar();
$pedido1->cancelar();
$pedido1->mostrarDados();

echo "<h2>Pedido 57</h2>";

$pedido2 = new Pedido();
$pedido2->pedido = 57;
$pedido2->cliente = 'Zuzu';
$pedido2->valor = 26.19;
$pedido2->status = 'Aguardando';

$pedido2->mostrarDados();
$pedido2->adicionarItem(7.90);
$pedido2->cancelar();
$pedido2->mostrarDados();
?>