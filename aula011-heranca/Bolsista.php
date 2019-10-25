<?php

require_once 'Aluno.php';

final class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa() {
        echo "<p>Bolsa do aluno {$this->getNome()}, matrícula {$this->getMatricula()}, renovada.</p>";
    }
    
    public function pagarMensalidade() {
        echo "<p>{$this->getNome()} é bolsista, paga mensalidade com desconto.</p>";
    }

        public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
