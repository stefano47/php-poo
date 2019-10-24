<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga = 100;
    protected $tampada;
    
    public function rabiscar() {
        if (($this->tampada == true) || ($this->carga <= 5)) {
            echo '<p>[ERRO] Não posso rabiscar! A caneta está tampada ou sem tinta!</p>';
        } else {
            echo '<p>Estou rabiscando...</p>';
            $this->carga -= 5;
        }
    }
    
    public function escrever() {
        if (($this->tampada == true) || ($this->carga <= 10)) {
            echo '<p>[ERRO] Não posso escrever! A caneta está tampada ou sem tinta!</p>';
        } else {
            echo '<p>Estou escrevendo...</p>';
            $this->carga -= 10;
        }
    }

        public function tampar() {
        $this->tampada = true;
    }
    
    public function destampar() {
        $this->tampada = false;
    }
}

