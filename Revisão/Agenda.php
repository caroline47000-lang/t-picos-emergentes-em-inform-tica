<?php


class Contato {
    private $nome;
    private $telefone;

    public function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}


class Agenda {
    private $contatos = [];

   
    public function adicionarContato($nome, $telefone) {
        $novoContato = new Contato($nome, $telefone);
        $this->contatos[] = $novoContato;
    }

   
    public function listar() {
        echo "=== AGENDA DE CONTATOS ===\n";
        foreach ($this->contatos as $contato) {
            
            echo "Nome: " . $contato->getNome() . " | Tel: " . $contato->getTelefone() . "\n";
        }
        echo "--------------------------\n";
    }
}



$minhaAgenda = new Agenda();


$minhaAgenda->adicionarContato("Carlos Eduardo", "(11) 99999-1111");
$minhaAgenda->adicionarContato("Beatriz Rocha", "(21) 98888-2222");
$minhaAgenda->adicionarContato("André Martins", "(51) 97777-3333");


$minhaAgenda->listar();

?>