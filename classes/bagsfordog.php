<?php
require_once __DIR__ .'/products.php';
require_once __DIR__ .'/dogfood.php';


class BagsForDogs  extends  DogFood{
    public $size;
    public $origin;

    public function __construct(
        $nome,
        $descrizione,
        $immagine,
        $categoria,
        $ingredients,
        $weight,
        $size,
        $origin
        
    )
    {
        parent::__construct(
            $nome,
            $descrizione,
            $immagine,
            $categoria,
            $ingredients,
            $weight
        );
        $this->size = $size;
        $this->origin = $origin;

    }
    public function toImg()
    {
        return   "<img src='". $this->immagine . "'>";
    }

    
};