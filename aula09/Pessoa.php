<?php
class Pessoa
{
    //Atributos
    private $nome;
    private $idade;
    private $sexo;

    //Construtor;
    public function __construct($no, $id, $se)
    {
        $this->nome = $no;
        $this->idade = $id;
        $this->sexo = $se;
    }
    
    //Métodos especiais
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    //Métodos
    public function fazerAniversario(){
        $this->setIdade($this->getIdade() + 1);
    }
}
