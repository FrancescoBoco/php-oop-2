<?php

class Products{
    public $nome;
    public $descrizione;
    public $immagine;
    public $categoria;

    public function __construct(
        $nome,
        $descrizione,
        $immagine,
        $categoria,
    )
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}




