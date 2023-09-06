<?php
require_once __DIR__ .'/products.php';
require_once __DIR__.'/../traits/HaNome.php';


class Rope extends Products{

    use HaNome;


    public $lunghezza;
    public $materiale;

    public function __construct(
        $nome,
        $descrizione,
        $immagine,
        $categoria,
        $prezzo,
        $lunghezza,
        $materiale
    )
    {
        parent::__construct(
            $nome,
            $descrizione,
            $immagine,
            $categoria,
            $prezzo,
            
            
        );
        $this->lunghezza = $lunghezza;
        $this->materiale = $materiale;

    }
    public function toImg()
    {
        return   "<img src='". $this->immagine . "'>";
    }

    
};



