<?php 

// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

function getRandomNumbers($min, $max, $nItems){

   $numArray = [];
   
   // non devono uscire più numeri di quelli che ho detto io
   if(($max - $min) < $nItems){
     $nItems = $max - $min;
   }
   
   // eseguo l'operazione fino a quando non raggiunge il numero di items che gli ho detto io (15)
   while(count($numArray) <  $nItems){

     // estraggo il numero
     $number = rand($min,$max);
     // se il numero estratto non è già uscito
     if(!in_array($number,$numArray)){

       // pusho il numero estratto nell'array
       $numArray[] = $number;
     }
   
   }
   
   return $numArray;
   
}

var_dump(getRandomNumbers(0,15,15));

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 4</title>
</head>
<body>


</body>
</html>
