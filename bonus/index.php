<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta --> 

<?php
$random_array = range(0, 100); //choose a range 
shuffle($random_array); //randomize it
$random_array = array_slice($random_array ,0,10); //give a length to an array 
var_dump($random_array)
?>

