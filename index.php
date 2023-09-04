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


$dogfood = new DogFood(
    "HappyDog",
    'Alimento completo ricco di vitamine',
    'https://dazeroaquattrozampe.com/44-medium_default/happy-dog-adult-supreme-sensible-toscana.jpg',
    'Cane',
    'Proteine grezze 29%, grassi grezzi 14%, fibre grezze 3%, ceneri grezze 7%, calcio 1.25%, fosforo 0.85%, sodio 0.25%, potassio 0.45%',
    '>20kg'
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


            <div id="second-card">
            
                <div>
                    <h1>
                        
                        <?php echo $dogfood->nome  ?>
                        
                    </h1>
                </div>
                
                <div>
                    
                    <p >
                        Descrizione: <?php echo $dogfood->descrizione ?> 
                    </p>
                    
                </div>
                <!-- immagine --> 
                <?php echo $dogfood->toImg() ?> 

                <h2>
                    Questo prodotte è ideato per il <?php echo $dogfood->categoria ?>
                </h2>
                
                <h5>
                    Lunghezza: <?php echo $dogfood->ingredients ?>
                </h5>
                
                <h5>
                    Materiale:<?php echo $dogfood->weight ?>
                </h5>
            
            </div>
        </main>
    </body>
    </html>