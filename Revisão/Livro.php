<?php

class Livro {
    
    private $titulo;
    private $autor;
    private $paginas;

   
    public function __construct($t, $a, $p) {
        $this->titulo = $t;
        $this->autor = $a;
        $this->paginas = $p;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    
    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

   
    public function getPaginas() {
        return $this->paginas;
    }

    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }

   
    public function exibir() {
        echo "Título: " . $this->getTitulo() . "\n";
        echo "Autor: " . $this->getAutor() . "\n";
        echo "Páginas: " . $this->getPaginas() . "\n";
        echo "---------------------------\n";
    }
}


$livro1 = new Livro("O Alquimista", "Paulo Coelho", 172);
$livro2 = new Livro("Dom Casmurro", "Machado de Assis", 256);


$livro1->exibir();
$livro2->exibir();

?>