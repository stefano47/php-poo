<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(0);
    }
    
    protected function ganharExperiencia($e) {
        $this->setExperiencia($this->getExperiencia() + $e);
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
}
