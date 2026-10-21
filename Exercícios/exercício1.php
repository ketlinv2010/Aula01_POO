<?php

class Celular{
    //Atributos
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;

    // //Métodos
    public function ligar(){
        if ($this->ligado == false){
            $this->ligado = true;
            echo "Celular ligado...<br>";
        }
    }

    public function desligar(){
        if ($this->ligado == true){
            $this->ligado = false;
            echo "<br>Desligando o celular...<br>";
        }
    }

    public function user($consumo){
        $this->bateria = $this->bateria - $consumo;
        echo "<br>Bateria atual: " . $this->bateria;
    }

    public function carregar($carga){
        $this->bateria = $this->bateria + $carga;

        if($this->bateria > 100){
            $this->bateria = 100;
        }
        echo "<br>Bateria carregando...<br>";
        echo "<br>Bateria: " . $this->bateria . "%<br>";
    }
}

$celular1 = new Celular();
$celular1->marca = 'Samsung';
$celular1->modelo = 'A13';
$celular1->cor = 'Lilás';
$celular1->bateria = 90;
$celular1->ligado = false;

echo "<p>Marca do celular: " . $celular1->marca . "</p>";
echo "<p>Modelo do celular: " . $celular1->modelo . "</p>";
echo "<p>Cor do celular: " . $celular1->cor . "</p>";
echo "<p>Bateria: " . $celular1->bateria . "%</p>";
echo "<p>Está ligado: " . ($celular1->modelo ? 'Não está ligado' : 'Está ligado') . "</p>";
$celular1->ligar();
$celular1->user(40);
$celular1->carregar(60);
$celular1->desligar();