<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Hey guys Im in New York now!'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Joseph Johansson',
            'text' => 'Hey yoo'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys($posts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < count($keys); $i++) {
            $key = $keys[$i]; //prendo le singole date e variabile keys prende i post all'interno di ogni data 
            $array = $posts[$key]; //variabile = array[con indice le date, perche le key non hano numeri in questo caso ma come nome le date], dopo le andro a scorrere una data alla vota creando una variabile che andrà a prender un signolo post
        ?>
            <li>
                <h4>Data: <?php echo $key; ?> </h4>
                <ul>
                    <?php for($j=0; $j < count($array); $j++) {
                        $single_post = $array[$j];
                        ?>
                        <li> <?php echo $single_post['title']?> </li>
                        <li> <?php echo $single_post['author']?> </li>
                        <li> <?php echo $single_post['text']?> </li> <br>
                    <?php }
                    ?>
                </ul>
            </li>
        <?php } 
        ?>    
    </ul>
</body>
</html>