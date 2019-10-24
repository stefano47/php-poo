<?php

class Conta {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    # Método Construtor
    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
    }
    
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        
        if ($this->getTipo() == "cc") {
            $this->setSaldo(50);
        } elseif ($this->getTipo() == "cp") {
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>[ERRO] Conta com saldo, náo pode ser fechada.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>[ERRO] Conta com débito, não pode ser fechada.</p>";
        } else {
            $this->setStatus(false);
        }
    }
    
    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        }else {
            echo "<p>[ERRO] Essa conta está fechada!!!.</p>";
        }
    }
    
    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "<p>[ERRO] Saldo insuficiente para esse saque.</p>";
            }
        } else {
            echo "<p>[ERRO] Essa conta está fechada!!!</p>";
        }
    }
    
    public function pagarMensal() {
        if ($this->getTipo() == "cc") {
            $msl = 12;
        } elseif ($this->getTipo() == "cp") {
            $msl = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $msl);
        }
    }
     
    # Métodos Getters/Setters
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
