<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    function apresentar() {
        echo "<p>----------------------------------------------</p>";
        echo "<p>NOME: ".($this->getNome())."</p>";
        echo "<p>NACIONALIDADE: ".($this->getNacionalidade())."</p>";
        echo "<p>IDADE: ".($this->getIdade())." anos</p>";
        echo "<p>ALTURA: ".($this->getAltura())."m</p>";
        echo "<p>PESO: ".($this->getPeso())." kg</p>";
        echo "<p>VITÓRIAS: ".($this->getVitorias())."</p>";
        echo "<p>DERROTAS: ".($this->getDerrotas())."</p>";
        echo "<p>EMPATES: ".($this->getEmpates())."</p>";
    }
    
    function status() {
        echo $this->getNome();
        echo " é um ".($this->getCategoria());
        echo "<br/>vitórias: ".($this->getVitorias());
        echo " | derrotas: ".($this->getDerrotas());
        echo " | empates: ".($this->getEmpates());
        echo "<p>----------------------------------------------</p>";
    }
    
    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
            
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    private function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->getPeso() < 52.2 || $this->getPeso() > 120.2) {
            echo "<p>Peso inválido para qualquer categoria.</p>";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Peso Leve";
        } elseif($this->getPeso() <= 83.9) {
            $this->categoria = "Peso Médio";
        } else {
            $this->categoria = "Peso Pesado";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }
}
