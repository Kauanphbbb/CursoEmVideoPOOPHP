<?php

class Cachorro
{
    public $nome;
    protected $raca;
    private $vivo;

    public function life()
    {
        $this->vivo = true;
    }

    public function kill()
    {
        $this->vivo = false;
    }

    public function latir()
    {
        if ($this->vivo == false) {
            echo "ERROR the dog is dead";
        } else {
            echo "AUAU";
        }
    }
}
