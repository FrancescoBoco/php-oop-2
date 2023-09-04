<?php

class Products{
    public $cibo;
    public $giochi;
    public $cucce;
    public $accessori;

    public function __construct(
        $cibo,
        $giochi,
        $cucce,
        $accessori,
    )
    {
        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cucce = $cucce;
        $this->accessori = $accessori;
    }
    public function toString()
    {
        return  'Prodotti' . $this->cibo . $this->giochi . $this->cucce .'e molto altro!';
    }
}

$products = new Products(
    'HappyDog',
    'Corda',
    'Schiuma',
    'corda',
);

var_dump($products);
