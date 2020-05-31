<?php
class Caneta
{
    private $modelo;
    private $cor;
    private $tampada;
    private $ponta;

    public function __construct($modelo)
    {
        $this->tampada = true;
        $this->modelo = $modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setPonta($ponta)
    {
        $this->modelo = $ponta;
    }
    public function getPonta()
    {
        return $this->ponta;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getCor()
    {
        return $this->cor;
    }

    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
