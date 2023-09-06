<?php

require_once __DIR__.'/../traits/HaNome.php';

class Products {

    use HaNome;

    public $descrizione;
    public $immagine;
    public $categoria;
    public $prezzo;

    public function __construct(
        $nome,
        $descrizione,
        $immagine,
        $categoria,
        $prezzo,
    )
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->immagine = $immagine;
        $this->categoria = $categoria;

       

        if(is_numeric($prezzo) && $prezzo > 0 ){
            $this->prezzo = $prezzo;
        }
        else{
            throw new Exception('prezzo non valido');
        }


    }
       
    
    
}




