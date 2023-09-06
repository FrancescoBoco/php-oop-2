<?php

try{
        
    $rope = new Rope(
        "Guinzaglio",
        'Ottimo guinzaglio anche per cani di oltre 20kg',
        'https://img.fruugo.com/product/8/28/668777288_max.jpg',
        'Cane',
        20,
        '120cm',
        'Guinzaglio di nylon e gancio di metallo'
    );


    $dogfood = new DogFood(
        "HappyDog",
        'Alimento completo ricco di vitamine',
        'https://dazeroaquattrozampe.com/44-medium_default/happy-dog-adult-supreme-sensible-toscana.jpg',
        'Cane',
        2,
        'Proteine grezze 29%, grassi grezzi 14%, fibre grezze 3%, ceneri grezze 7%, calcio 1.25%, fosforo 0.85%, sodio 0.25%, potassio 0.45%',
        '>20kg'
    );


    $bagsfordog = new BagsForDogs(
        "Pedigree",
        'Gli alimenti umidi di Pedigree® sono disponibili in vaschette e lattine. I nostri alimenti umidi contengono circa quattro volte meno calorie per grammo rispetto alla media del secco, aiutando a mantenere un corretto peso corporeo per il tuo cane. Essi contengono più umidità rispetto al secco, aiutando così la salute del tratto urinario.',
        'https://m.media-amazon.com/images/I/81u0jcx-7uL.jpg',
        'Cane',
        2,
        'Lattina Patè Protein + con Tacchino e Pollo',
        '>20kg',
        '400g',
        'Tacchino e Pollo'
    );

}
catch( Exception $e){
    echo '<h3> Si è verificato un errore:</h3>'. '<br>'.'<h4>'. $e->getMessage().'</h4>';
}