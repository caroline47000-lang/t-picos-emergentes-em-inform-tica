<?php
class Livro {
    public $titulo;
    public $autor;
    public $numPaginas;
    public $anoPublicacao;

    public function exibirInformacoes() {
        echo "Livro: $this->titulo <br>";
        echo "Autor: $this->autor <br>";
        echo "Páginas: $this->numPaginas <br>";
        echo "Ano: $this->anoPublicacao <br><br>";
    }
}

// Instanciando o objeto
$meuLivro = new Livro();
$meuLivro->titulo = "Dom Casmurro";
$meuLivro->autor = "Machado de Assis";
$meuLivro->numPaginas = 256;
$meuLivro->anoPublicacao = 1899;

$meuLivro->exibirInformacoes();
?>