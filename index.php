<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/classes/products.php';
require_once __DIR__ .'/classes/rope.php';
require_once __DIR__ .'/classes/dogfood.php';
require_once __DIR__ .'/classes/bagsfordog.php';
require_once __DIR__ . '/db.php';
//require_once __DIR__ .'/classes/by-products-cats.php';


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

            <div id="third-card">
            
                <div>
                    <h1>
                        
                        <?php echo $bagsfordog->nome  ?>
                        
                    </h1>
                </div>
                
                <div>
                    
                    <p >
                        Descrizione: <?php echo $bagsfordog->descrizione ?> 
                    </p>
                    
                </div>
                <!-- immagine --> 
                <?php echo $bagsfordog->toImg() ?> 

                <h2>
                    Questo prodotte è ideato per il <?php echo $bagsfordog->categoria ?>
                </h2>
                
                <h5>
                    Lunghezza: <?php echo $bagsfordog->ingredients ?>
                </h5>
                
                <h5>
                    Materiale:<?php echo $bagsfordog->weight ?>
                </h5>
                <h4>
                    la quantità di prodotto all'interno è di : <?php echo $bagsfordog->size ?>
                </h4>
                
                <h4>
                    Il prodotto è composto principalmetne da  <?php echo $bagsfordog->origin ?>
                </h4>
            
            </div>
        </main>
    </body>
    </html>