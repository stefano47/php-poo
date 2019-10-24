<?php

class Fone {
    var $modelo;
    var $carga;
    var $volume;
    var $cor;
    var $bluetooh;
    var $ligado;
    
    function ligar() {
        if ($this->carga > 0) {
            $this->ligado = true;
        }
    }
    
    function desligar() {
        $this->ligado = false;
    }
    
    function ligarBluetooh() {
        $this->bluetooh = true;
    }
    
    function desligarBluetooh() {
        $this->bluetooh = false;
    }
            
    function aumentaVolume() {
        if($this->volume < 100) {
            $this->volume += 10;
            echo 'Volume aumentado... '.$this->volume."<br/>";
        } else {
            echo 'Volume máximo!!!';
        }
    }
    
    function baixarVolume() {
        if($this->volume > 0) {
            $this->volume -= 10;
        } else {
            echo 'Volume mínimo!!!';
        }
    }
    
    function conectarComBluetooh() {
        if ($this->bluetooh == false) {
            echo 'Ligando bluetooh antes de conectar...<br/>';
            $this->bluetooh = true;
            echo 'Bluetooh ligado... CONECTADO!!!<br/>';
        } else {
            echo 'Bluetooh ligado... CONECTADO!!!<br/>';
        }
    }
}
