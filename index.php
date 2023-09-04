<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/classes/products.php';
require_once __DIR__ .'/classes/dogs.php';
require_once __DIR__ .'/classes/cats.php';
//require_once __DIR__ .'/classes/byProoductsDogs.php';
//require_once __DIR__ .'/classes/by-products-cats.php';


$rope = new Rope(
    "Guinzaglio",
    'Ottimo guinzaglio anche per cani di oltre 20kg',
    'https://img.fruugo.com/product/8/28/668777288_max.jpg',
    'Cane',
    '120cm',
    'Guinzaglio di nylon e gancio di metallo'
);

//var_dump($rope->$name);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div id="first-card">
            
                <div>
                    <h1>
                        
                        <?php echo $rope->nome  ?>
                        
                    </h1>
                </div>
                
                <div>
                    
                    <p >
                        Descrizione: <?php echo $rope->descrizione ?> 
                    </p>
                    
                </div>
                <!-- immagine --> 
                <?php echo $rope->toImg() ?> 
                <h2>
                    Questo prodotte è ideato per il <?php echo $rope->categoria ?>
                </h2>
                
                <h5>
                    Lunghezza: <?php echo $rope->lunghezza ?>
                </h5>
                
                <h5>
                    Materiale:<?php echo $rope->materiale ?>
                </h5>
            
            </div>
        </main>
    </body>
    </html>