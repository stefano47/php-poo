<?php

interface Fone {
    public function ligar();
    public function desligar();
    public function play();
    public function pause();
    public function aumentarVolume();
    public function baixarVolume();
    public function recarregar();
    public function status();
}
