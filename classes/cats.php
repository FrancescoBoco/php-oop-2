<?php
require_once __DIR__ .'/products.php';

class Cats extends Products{
    
};

$cats = new Cats(
    'HappyDog',
    'Corda',
    'Schiuma',
    'corda',
);


var_dump($cats);