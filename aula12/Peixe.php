<?php
require_once "Animal.php";
class Peixe extends Animal{
    private $corEscama;

    public function locomover()
    {
        echo "<p>Nadando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo substancias</p>";
    }
    public function emitirSom()
    {
        echo "<p>Peixe não emite som</p>";
    }
    public function soltarBolhas(){
        echo "<p>Soltando bolhas</p>";
    }

    public function getEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

}