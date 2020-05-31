<?php
require_once "Animal.php";
class Ave extends Animal
{
    private $corPena;

    public function locomover()
    {
        echo "<p>Voando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de ave</p>";
    }
    public function fazerNinho()
    {
        echo "<p>Construindo ninho</p>";
    }

    public function getPena()
    {
        return $this->corPena;
    }
    public function setCorEscama($corPena)
    {
        $this->corPena = $corPena;
    }
}
