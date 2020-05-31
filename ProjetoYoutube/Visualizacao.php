<?php
require_once "Gafanhoto.php";
require_once "Video.php";
class Visualizacao
{
    private $expectador;
    private $filme;

    public function __construct($ex, $fi)
    {
        $this->expectador = $ex;
        $this->filme = $fi;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->expectador->setTotAssistido($this->expectador->getTotAssistido() + 1);
    }

    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc)
    {
        $nota = 0;
        if ($porc <= 20) {
            $nota = 3;
        } elseif ($porc <= 50) {
            $nota = 5;
        } elseif ($porc <= 90) {
            $nota = 8;
        } else {
            $nota = 10;
        }

        $this->filme->setAvaliacao($nota);
    }
    public function getExpectador()
    {
        return $this->expectador;
    }
    public function setExpectador($expectador)
    {
        $this->expectador = $expectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }
}
