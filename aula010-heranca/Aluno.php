<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    public function cancelarMatricula() {
        $this->setMatricula(0);
    }
    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

}
