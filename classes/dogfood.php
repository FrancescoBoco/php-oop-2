<?php
require_once __DIR__ .'/products.php';



class DogFood  extends Products{
    public $ingredients;
    public $weight;

    public function __construct(
        $nome,
        $descrizione,
        $immagine,
        $categoria,
        $prezzo,
        $ingredients,
        $weight
    )
    {
        parent::__construct(
            $nome,
            $descrizione,
            $immagine,
            $categoria,
            $prezzo,
            
        );
        $this->ingredients = $ingredients;
        $this->weight = $weight;

    }
    public function toImg()
    {
        return   "<img src='". $this->immagine . "'>";
    }

    
};