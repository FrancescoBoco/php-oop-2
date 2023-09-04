<?php
require_once __DIR__ .'/classes/products.php';
require_once __DIR__ .'/classes/dogs.php';
require_once __DIR__ .'/classes/cats.php';
require_once __DIR__ .'/classes/byProoductsDogs.php';
require_once __DIR__ .'/classes/by-products-cats.php';
var_dump($products)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <header>
        <div>
            <h1>
                <?php echo toString($products) ?> 
            </h1>
        </div>
    </header>
</body>
</html>