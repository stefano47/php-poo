<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    
    public function ligar() {
        $this->setLigado(true);
    }
    
    public function desligar() {
        $this->setLigado(false);
    }
    
    public function abrirMenu() {
        echo "<p>Está ligado? ".($this->getLigado()?"SIM":"NÃO")."</p>";
        echo "<p>Está tocando?".($this->getTocando()?"SIM":"NÃO")."</p>";
        echo "Volume: ".($this->getVolume());
        for($c = 0; $c <= $this->getVolume(); $c += 10) {
            echo " |";
        }
        echo "<br/>";
    }
    
    public function fecharMenu() {
        echo "<p>Fechando menu... FECHADO!</p>";
    }
    
    public function aumentarVolume() {
        if ($this->getLigado() && $this->getVolume() < 100) {
            $this->setVolume($this->getVolume() + 10);
        }
    }
    
    public function baixarVolume() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume($this->getVolume() - 10);
        }
    }
    
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    
    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
}
