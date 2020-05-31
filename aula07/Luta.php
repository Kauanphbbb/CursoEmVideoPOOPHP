<?php
require_once "Lutador.php";
class Luta
{
    //Atributos 
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;
    //Métodos
    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar()
    {
        if ($this->getAprovada()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empatou</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;

                case 1: //Desafiado ganhou
                    echo "<p>" . $this->desafiado->getNome() . " venceu </p>";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    break;

                case 2: //Desafiante ganhou
                    echo "<p>" . $this->desafiante->getNome() . " venceu </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }
    //Métodos especiais
    public function getDesafiante()
    {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}
