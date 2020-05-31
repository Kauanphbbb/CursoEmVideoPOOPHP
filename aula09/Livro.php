<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao
{
    //Atributos
    private $titulo;
    private $autor;
    private $leitor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;

    public function __construct($ti, $au, $to, $le)
    {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $to;
        $this->pagAtual = 1;
        $this->aberto = false;
        $this->leitor = $le;
    }

    //Métodos especiais
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual)
    {
        //Verifica se a página atual é maior que zero e menor que o total de páginas
        if ($pagAtual < $this->getTotPaginas() && $pagAtual > 0) {
            $this->pagAtual = $pagAtual;
        }
    }

    public function getAberto()
    {
        if ($this->aberto) {
            return "Sim";
        } else {
            return "Não";
        }
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    //Implemetando a interface
    public function abrir()
    {
        $this->setAberto(true);
    }
    public function fechar()
    {
        $this->setAberto(false);
    }
    public function folhear()
    {
        $this->setPagAtual(rand(1, $this->getTotPaginas()));
    }
    public function avancarPag()
    {
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag()
    {
        $this->setPagAtual($this->getPagAtual() - 1);
    }

    //Método
    public function detalhes()
    {
        echo "<br>Título: " . $this->getTitulo();
        echo "<br>Autor: " . $this->getAutor();
        echo "<br>Total de páginas: " . $this->getTotPaginas();
        echo "<br>Página atual: " . $this->getPagAtual();
        echo "<br>Aberto: " . $this->getAberto();
        echo "<br>Leitor: " . $this->leitor->getNome();
    }
}
