<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$matches = [
    [
        'homeclub'=> 'Naples',
        'guestclub'=> 'Madrid',
        'homescore'=> 2,
        'guestscore'=> 1
    ],
    [
        'homeclub'=> 'Barcelona',
        'guestclub'=> 'Tarragona',
        'homescore'=> 3,
        'guestscore'=> 3
    ],
    [
        'homeclub'=> 'Stockholm',
        'guestclub'=> 'Milan',
        'homescore'=> 2,
        'guestscore'=> 4
    ],
];
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
        <?php
        for ($i=0; $i < count($matches); $i++) {
            $single_match = $matches[$i];
        ?>
            <li>
            <p><?php echo $single_match['homeclub']; ?> vs <?php echo $single_match['guestclub']; ?> score : <?php echo $single_match['homescore']; ?> / <?php echo $single_match['guestscore']; ?> </p>
            </li>
        <?php }
        ?>
    </ul>
    
</body>
</html>
