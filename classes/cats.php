<?php
require_once __DIR__ .'/products.php';

class Rope extends Products{
    public $lunghezza;
    public $materiale;

    public function __construct(
        $nome,
        $descrizione,
        $immagine,
        $categoria,
        $lunghezza,
        $materiale
    )
    {
        parent::__construct(
            $nome,
            $descrizione,
            $immagine,
            $categoria,
            
        );
        $this->lunghezza = $lunghezza;
        $this->materiale = $materiale;

    }
    public function toImg()
    {
        return   "<img src='". $this->immagine . "'>";
    }

    
};



