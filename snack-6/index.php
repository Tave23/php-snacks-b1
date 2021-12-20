<?php

// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

   $db = [
      'teachers' => [
         [
               'name' => 'Michele',
               'lastname' => 'Papagni'
         ],
         [
               'name' => 'Fabio',
               'lastname' => 'Forghieri'
         ]
      ],
      'pm' => [
         [
               'name' => 'Roberto',
               'lastname' => 'Marazzini'
         ],
         [
               'name' => 'Federico',
               'lastname' => 'Pellegrini'
         ]
      ]
   ];

   foreach(array_keys($db) as $teacherOrPm){

      for ($i=0; $i < count($db[$teacherOrPm]); $i++){
         
         $teacherOrPmArray = $db[$teacherOrPm][$i];
   
         // echo "<h4>{$teacherOrPm} : </h4>";

         if ($teacherOrPm == 'teachers') {
            echo "<h4>{$teacherOrPm} : </h4>";
         } elseif ($teacherOrPm == 'pm') {
            echo "<h5>{$teacherOrPm} : </h5>";
         }
   
         foreach(array_keys($teacherOrPmArray) as $keyArray){
   
            echo " <li> {$keyArray} ---> {$teacherOrPmArray[$keyArray]} </li> ";
         }
      }
   
      echo "<hr>";
   };

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack-6</title>
</head>
<body>

   

</body>
<style>

h5{
   background-color: lightgreen;
}

h4{
   background-color: grey;
}

</style>
</html>