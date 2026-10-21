<?php

class Aula{
    public string $disciplina;
    public string $professor;
    public float $duracao;
    public int $numeroSala;
    public int $bloco;

    public function exibirInformacoes(){
        echo "<p>Disciplina: " . $this->disciplina . "</p>";
        echo "<p>Professor: " . $this->professor . "</p>";
        echo "<p>Duração da aula: " . $this->duracao . " horas</p>";
        echo "<p>Número da sala: " . $this->numeroSala . "</p>";
        echo "<p>Bloco: " . $this->bloco . "</p>";
    }

    public function trocarProfessor($novoProf){
        $this->professor = $novoProf;
        echo "Novo Professor: " . $this->professor . "<br>";  
    }

    public function alterLocal($n_sala, $blocoNovo){
        $this->numeroSala = $n_sala;
        $this->bloco = $blocoNovo;
        echo "<p>Local de aula alterado para sala: " . $this->numeroSala . " - Bloco: "
        . $this->bloco . "</p>";
    }
}

$aula1 = new Aula();
$aula1->disciplina = 'Matemática';
$aula1->professor = "Ana Paula";
$aula1->duracao = 1.4;
$aula1->numeroSala = 12;
$aula1->bloco = 1;



echo "<h1>Dados da aula</h1>";

$aula1->exibirInformacoes();
echo "<hr>";
$aula1->trocarProfessor("Giuliana");
$aula1->alterLocal(40, 2);

?>