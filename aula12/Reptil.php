<?php
class Reptil extends Animal{
    private $corEscama;
    
    public function locomover()
    {
        echo "<p>Rastejando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo Vegetais</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de reptil</p>";
    }
    
    public function getEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}