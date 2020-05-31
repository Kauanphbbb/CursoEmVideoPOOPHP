<?php
require_once "Pessoa.php";
class Professor extends Pessoa
{
    //Atributos
    private $especialidade;
    private $salario;

    //Métodos
    public function aumento($aum)
    {
        $this->salario += $aum;
    }

    //Métodos especiais
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
}
