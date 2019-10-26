<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {
    private $espectador;
    private $video;
    
    public function __construct($espectador, $video) {
        $this->setEspectador($espectador);
        $this->setVideo($video);
        $this->getVideo()->setViews($this->getVideo()->getViews() + 1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido() + 1);
    }

    public function avaliar(){
        $this->getVideo()->setAvaliacao(5);
    }
    
    public function avaliarNota($nota) {
        $this->getVideo()->setAvaliacao($nota);
    }
    
    public function avaliarPorc($porc) {
        $nova = 0;
        
        if ($porc <= 20) {
            $nova = 3;
        } elseif($porc <= 50) {
            $nova = 5;
        } elseif($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        
        $this->getVideo()->setAvaliacao($nova);
    }
    
    public function getEspectador() {
        return $this->espectador;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function setVideo($video) {
        $this->video = $video;
    }
}
