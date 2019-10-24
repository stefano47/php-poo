<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    # Na hora que uma nova ContaBanco for instânciada ela vai estar fechada e com saldo zero.
    function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
    }

    # o método abrir conta muda o status da conta para aberto.
    function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        
        if ($this->getTipo() == "cc") {
            $this->setSaldo(50);
        } elseif($this->getTipo() == "cp") {
            $this->setSaldo(150);
        } else {
            echo "<p>Escolha Conta Corrente = 'cc' ou Conta Poupança = 'cp'.</p>";
        }
    }
    
    function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>A conta não pode ser fechada pois está com saldo positivo, realize um saque e depois feche a conta.</p>";
        } elseif($this->getSaldo() < 0) {
            echo "<p>A conta não pode ser fechada pois está em débito, você deve zerar o saldo antes de fechar.</p>";
        } else {
            echo "<p>Conta fechada!</p>";
            $this->setStatus(false);
        }
    }
    
    function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "<p>[ERRO] Essa conta está fechada!!!</p>";
        }
    }
    
    function sacar($valor) {
        if ($this->getStatus() && $this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
        } elseif ($this->getStatus() == false) {
            echo "<p>[ERRO] Essa conta está fechada!!!</p>";
        } elseif($this->getSaldo() < $valor) {
            echo "<p>Saldo insuficiente para esse saque.</p>";
        }
    }
    
    function pagarMensal() {
        if ($this->getTipo() == "cc") {
            $this->setSaldo($this->getSaldo() - 12);
        } else {
            $this->setSaldo($this->getSaldo() - 20);
        }
    }
            
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}
