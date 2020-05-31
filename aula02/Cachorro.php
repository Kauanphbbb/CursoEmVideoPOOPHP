<?php

class Cachorro
{
    var $nome;
    var $raca;
    var $vivo;

    function latir()
    {
        if ($this->vivo == false) {
            echo "ERROR the dog is dead";
        } else {
            echo "AUAU";
        }
    }
}
